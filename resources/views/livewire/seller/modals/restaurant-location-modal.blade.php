<div>
    <x-jet-dialog-modal wire:model="confirmRestaurantLocationModal">
        <x-slot name="title">
            <h2 class="font-medium text-base ml-auto">افزودن غذای به فودپارتی</h2>
        </x-slot>

        <x-slot name="content">
            <div class="col-span-12 sm:col-span-12" wire:ignore>
                <div class="mb-6">
                    <div class="mt-3">

                    </div>
                </div>
            </div>
            <script type="text/javascript">
                var myMap = new ol.Map({
                    target: 'map',
                    key: 'web.573927d2a1354b129a4616f6c08c6fd5',
                    maptype: 'neshan',
                    poi: true,
                    traffic: false,
                    view: new ol.View({
                        center: ol.proj.fromLonLat([51.338076, 35.699756]),
                        zoom: 14
                    })
                });
            </script>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('confirmRestaurantLocationModal', false)"

                {{ __('لغو') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-2 btn btn-primary w-20" wire:click="EditLocation()">
                {{ __('ذخیره') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</div>
