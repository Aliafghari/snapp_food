<div>
    <x-jet-dialog-modal wire:model="PhotoModalConfirm">
        <x-slot name="title">
            <h2 class="font-medium text-base ml-auto">
                {{ __('افزودن تصویر غذا') }}</h2>
        </x-slot>

        <x-slot name="content">
            <div class="col-span-12 sm:col-span-12">
                <div class="mt-3">
                    <div id="file-type-validation" class="p-5">
                        <div class="preview">


