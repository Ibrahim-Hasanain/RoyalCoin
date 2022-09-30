@component('mail::message')
    # Contact Us Message

    Name : {{ $details['name'] }}
    Telegram : {{ $details['telegram'] }}
    subject : {{ $details['subject'] }}
    Phone : {{ $details['phone'] }}
    Message : {{ $details['message'] }}

@if ($details['file_name'])
@component('mail::button', ['url' => route('file.download', ['file_name' => $details['file_name']])])
    Download File
@endcomponent
@endif


    Thanks
    {{ config('app.name') }}
@endcomponent
