<div>
    <livewire:delete-modal/>
    <livewire:admin.modals.restaurant-category-add-modal/>
    <livewire:admin.modals.restaurant-category-edit-modal/>

            <div class="content">
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button wire:click="$emit('confirmCategoryAdd')" class="btn btn-primary shadow-md ml-2">افزودن
                            دسته بندی جدید
                        </button>
                    </div>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
                                    <thead class="text-xs text-white uppercase bg-blue-600 dark:text-white">
                                    </thead>
                                    <tbody>
                                    @foreach ($Category as $Categories)
                                        @if( $Categories->id % 2 == 0  )
                                            <tr class="bg-blue-500 border-b border-blue-400">
                                        @else
                                            <tr class="bg-blue-500 border-b border-blue-400">
                                                @endif
                                                <td class="px-6 py-4">{{ $Categories->id }}</td>
                                                <td class="px-6 py-4">{{ $Categories->RestaurantType }}</td>
                                                <td class="px-6 py-4">
                                                    <button class="btn btn-elevated-primary w-24 ml-1 mb-2"
                                                            wire:click="$emit('EditModalConfirm',{{$Categories->id}})">
                                                        ویرایش
                                                    </button>
                                                    <button
                                                        class="btn btn-elevated-secondary w-24 ml-1 mb-2 text-indigo-900"
                                                        wire:click="$emit('DeleteModals','\\App\\Models\\restaurantCategories',{{$Categories->id}},'حذف دسته بندی رستوران' ,'آیا از حذف دسته بندی {{$Categories->RestaurantType}} مطمئن هستید ؟')"
                                                    >حذف
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



