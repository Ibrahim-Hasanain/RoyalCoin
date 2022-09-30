<?php

namespace App\Http\Livewire\Forms;

use App\Jobs\SendContactUsEmailJob;
use App\Mail\SendContactUsEmail;
use Exception;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class ContactUs extends Component
{
    use WithFileUploads;

    public $name;
    public $telegram;
    public $phone;
    public $subject;
    public $message;
    public $file;



    public $validation_errors = [];

    protected $rules = [
        'name' => 'required|min:3|max:255',
        'telegram' => 'required|min:3|max:255',
        'phone' => 'required|min:3|max:255',
        'subject' => 'required|min:3|max:255',
        'message' => 'required|min:3|max:255',
        'file' => 'nullable|max:5148',
    ];

    public function updatedFile()
    {
        $this->validate([

            'file' => 'image|max:5148', // 5MB Max

        ]);
    }



    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.forms.contact-us');
    }

    public function submit()
    {
        $this->validate();

        try {
            $fileName=null;

            if ($this->file) {
                $fileName=uniqid().'.'.$this->file->extension();
                $this->file->storeAs('contact-us-files', $fileName);
            }

            $details=[
            'name'=>$this->name,
            'telegram'=>$this->telegram,
            'message'=>$this->message,
            'phone'=>$this->phone,
            'subject'=>$this->subject,
            'file_name'=>$this->file ? $fileName : null,
            ];

            Mail::to(Config::get('forms.contact-us.email'))->send(new SendContactUsEmail($details));
            // dispatch(new SendContactUsEmailJob($details));
            $this->refresh();
            //flash message
            session()->flash("success", __('index.flash_messages.successes_message'));
        } catch (Exception $e) {
            session()->flash("error", __('index.flash_messages.error_message'));
            Log::error($e->getMessage());
            Log::error($e->getLine());
            Log::error($e->getFile());
        }
    }



    public function refresh()
    {
        $this->name= null;
        $this->phone= null;
        $this->telegram= null;
        $this->message= null;
        $this->subject= null;
        $this->file= null;
    }
}
