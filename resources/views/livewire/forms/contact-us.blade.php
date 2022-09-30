<div>
    @if (session()->has('success'))
        <div>
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
            </div>
        </div>
    @endif
    @if (session()->has('error'))
        <div>
            <div class="alert alert-danger alert-dismissible fade show">
                {{ session('error') }}
            </div>
        </div>
    @endif
    <form wire:submit.prevent="submit" class="contact-form">
        <div class="row">
            <div class="col-md-6">
                <input wire:model="name" type="text" name="name" id="name"
                    class="form-control form-control-solid @error('name') is-invalid state-invalid mb-0 mt-2 @enderror"
                    placeholder="{{ __('index.attr.name') }}" />
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <input wire:model="telegram" type="text" name="telegram"
                    class=" form-control form-control-solid @error('telegram') is-invalid state-invalid mb-0 mt-2 @enderror"
                    id="Telegram" placeholder="{{ __('index.attr.telegram') }}" />
                @error('telegram')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <input wire:model="phone" type="text" name="phone"
                    class=" form-control form-control-solid @error('phone') is-invalid state-invalid mb-0 mt-2 @enderror"
                    id="phone" placeholder="{{ __('index.attr.phone') }}" />
                @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="col-md-6">
                <input wire:model="subject" type="text"
                    class=" form-control form-control-solid @error('subject') is-invalid state-invalid mb-0 mt-2 @enderror"
                    name="subject" id="email" placeholder="{{ __('index.attr.subject') }}" />
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <textarea wire:model="message" name="message" id="message"
                    class="form-control form-control-solid @error('message') is-invalid state-invalid mb-0 mt-2 @enderror"
                    placeholder="{{ __('index.attr.message') }}" rows="5"></textarea>
                @error('message')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">

                <label id="file-label" style="border-radius: 18px;"
                    class="form-control corm-control-solid upload-file-input" for="file">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-file-earmark-text" viewBox="0 0 16 16">
                        <path
                            d="M5.5 7a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zM5 9.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5z" />
                        <path
                            d="M9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.5L9.5 0zm0 1v2A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5z" />
                    </svg>
                    @if ($file)
                        {{ $file->getClientOriginalName() }}
                    @else
                        {{ __('index.common.file_upload') }}
                    @endif
                </label>


                <input style="display:none" wire:model="file" type="file" name="file" id="file"
                    class="form-control form-control-solid  @error('file') is-invalid state-invalid mb-0 mt-2 @enderror">

                @error('file')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

            </div>

        </div>
        <div class="row">
            <div class="col-12">
                <div class="button text-center rounded-buttons">
                    <button wire:loading.attr="disabled" type="submit" class="btn primary-btn rounded-full">

                        <div wire:loading class="sk-chase">
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                            <div class="sk-chase-dot"></div>
                        </div>
                        <div wire:loading.remove>
                            {{ __('index.common.send_message') }}
                        </div>
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
