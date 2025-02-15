<?php

use Illuminate\Support\Facades\App;
use Livewire\Volt\Component;

new class extends Component {

    public $name = '';
    public $email = '';
    public $phone = '';
    public $message = '';
    public $agrement = false;

    public function mount($lang)
    {
        App::setLocale($lang);
    }

    public function resetForm()
    {
        $this->reset();
    }

    public function send()
    {
        $validated = $this->validate([
            'name' => 'required|min:3',
            'email' => 'nullable|min:3',
            'phone' => 'required|min:3',
            'message' => 'required|min:3',
        ]);

        dd($validated);
    }

}; ?>

<div class="modal fade" id="formReg" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="formModalLabel">{{ __('form.title') }}</h5>
                <button type="button" class="close border-0 bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="icofont-close-line fs-4"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <form id="myForm">
                    <div class="form-group">
                        <label for="name" class="col-form-label">{{ __('form.name') }}</label>
                        <input type="text" wire:model="name" class="form-control" id="name">
                        <div>@error('name') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="phone" class="col-form-label">{{ __('form.phone') }}</label>
                        <input type="text" wire:model="phone" class="form-control" id="phone">
                        <div>@error('phone') {{ $message }} @enderror</div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-form-label">{{ __('form.email') }}</label>
                        <input type="text" wire:model="email" class="form-control" id="email">
                        <div>@error('email') {{ $message }} @enderror</div>
                    </div>

                    <div class="form-group">
                        <label for="messageText" class="col-form-label">{{ __('form.message') }}</label>
                        <textarea class="form-control" wire:model="message" id="messageText"></textarea>
                        <div>@error('message') {{ $message }} @enderror</div>
                    </div>

                </form>
            </div>
            <div class="modal-footer" id="footer">
                <div class="form-result"></div>
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" wire:click="resetForm">{{ __('form.close') }}</button>
                <button type="button" class="btn btn-primary" wire:click="send">{{ __('form.submit') }}</button>
            </div>
        </div>
    </div>
</div>
