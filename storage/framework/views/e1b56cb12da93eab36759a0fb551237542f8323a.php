<div class="wrapper wrapper--top-nav">
    <div class="wrapper-box">
        <!-- BEGIN: Content -->
        <div class="content">
            <div class="grid grid-cols-12 gap-6">
                <div class="col-span-12 xxl:col-span-9" wire:ignore>
                    <div class="grid grid-cols-12 gap-6">
                        <!-- BEGIN: General Report -->
                        <div class="col-span-12 mt-8">
                            <div class="grid grid-cols-12 gap-6 mt-5">
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">

                                    <div class="box p-5">
                                        <div class="text-base text-green-600 mt-1 text-center"><?php echo e($SellCount); ?></div>
                                        <div class="text-base text-green-600 mt-1 text-center">تعداد سفارش</div>
                                    </div>

                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">

                                    <div class="box p-5">
                                        <div class="text-base text-red-600 mt-1 text-center"><?php echo e($sumSellPrice); ?></div>
                                        <div class="text-base text-red-600 mt-1 text-center">مجموع قیمت سفارشات</div>
                                    </div>

                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">

                                    <div class="box p-5">
                                        <div class="text-base text-blue-600 mt-1 text-center"><?php echo e($SellCompleteStatus); ?>

                                        </div>
                                        <div class="text-base text-blue-600 mt-1 text-center">سفارشات تحویل داده شده
                                        </div>
                                    </div>

                                </div>
                                <div class="col-span-12 sm:col-span-6 xl:col-span-3 intro-y">

                                    <div class="box p-5">
                                        <div class="text-base text-dark-600 mt-1 text-center"><?php echo e($sellSusspendStatus); ?>

                                        </div>
                                        <div class="text-base text-dark-600 mt-1 text-center">سفارشات معلق</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- END: General Report -->
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/livewire/admin/admin-dashboard.blade.php ENDPATH**/ ?>