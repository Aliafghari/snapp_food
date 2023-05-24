<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3096343655-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3096343655-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3096343655-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3096343655-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3096343655-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.modals.order-details-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3096343655-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3096343655-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3096343655-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3096343655-1');
} else {
    $response = \Livewire\Livewire::mount('seller.modals.order-details-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3096343655-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- BEGIN: Content -->
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="intro-y flex flex-col col-span-12 sm:flex-row items-center mt-8">
                    <?php if (isset($component)) { $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8 = $component; } ?>
<?php $component = App\View\Components\Tables\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Tables\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'col-span-3']); ?>
                        لیست آرشیو سفارشات
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8)): ?>
<?php $component = $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8; ?>
<?php unset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8); ?>
<?php endif; ?>
                    <div class="flex flex-col">
                        <!-- BEGIN: Pricing Tab -->
                        <div class="flex justify-end" wire:ignore>
                            <div class="pricing-tabs nav nav-tabs box rounded-full overflow-hidden" role="tablist">
                                <a id="layout-1-monthly-fees-tab" data-toggle="tab" data-target="#layout-1-monthly-fees"
                                   href="javascript:;"
                                   class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-nowrap text-center active"
                                   role="tab"
                                   aria-controls="layout-1-monthly-fees" aria-selected="true" wire:click="resetInput">فیلتر
                                    بر اساس قیمت </a>
                                <a id="layout-1-annual-fees-tab" data-toggle="tab" data-target="#layout-1-annual-fees"
                                   href="javascript:;"
                                   class="flex-1 w-32 lg:w-40 py-2 lg:py-3 whitespace-nowrap text-center" role="tab"
                                   aria-controls="layout-1-annual-fees" aria-selected="false" wire:click="resetInput">فیلتر
                                    بر اساس تاریخ</a>
                            </div>
                        </div>
                        <!-- END: Pricing Tab -->
                        <!-- BEGIN: Pricing Content -->
                        <div class="flex w-full" wire:ignore>
                            <div class="tab-content w-full">
                                <div id="layout-1-monthly-fees" class="tab-pane flex flex-col lg:flex-row active w-full"
                                     role="tabpanel" aria-labelledby="layout-1-monthly-fees-tab">
                                    <div class="col-span-12 flex-row flex items-center justify-center w-full">
                                        <label for="search"></label><input id="search" type="text"
                                                                           wire:model.debounce.350ms="search"
                                                                           class="shadow-md w-full form-control form-control-rounded justify-center mt-2"/>
                                    </div>
                                </div>
                                <div id="layout-1-annual-fees" class="tab-pane flex flex-col lg:flex-row w-full"
                                     role="tabpanel"
                                     aria-labelledby="layout-1-annual-fees-tab w-full">
                                    <div class="col-span-12 flex-row flex items-center justify-center w-full">
                                        <label for="dateSearch"></label><input id="dateSearch" type="date"
                                                                               wire:model.debounce.350ms="search"
                                                                               class="shadow-md w-full form-control form-control-rounded justify-center mt-2"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- END: Pricing Content -->
                    </div>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">ردیف</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">کاربر</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">قیمت</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">آدرس</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">تاریخ</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">وضعیت</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $AllOrders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $order->id % 2 == 0  ): ?>
                                            <tr>
                                        <?php else: ?>
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($order->id); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php echo e($order->cart->user->name); ?>

                                                </td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php echo e(\App\Models\Cart::where('id',$order->cart->id)->get()->first()->price); ?>

                                                </td>
                                                <?php if($order->cart->user->UserAddress->where('currentAddress',1)->first() !=null): ?>
                                                    <td class="report-box__indicator tooltip cursor-pointer border-b dark:border-dark-5 text-lg font-medium"
                                                        title="<?php echo e($order->cart->user->UserAddress->where('currentAddress',1)->first()->address); ?>">
                                                        <?php echo e(Str::limit($order->cart->user->UserAddress->where('currentAddress',1)->first()->address, 50)); ?>

                                                    </td>
                                                <?php else: ?>
                                                    <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    </td>
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($order->created_at); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php if($order->OrderStatus == 4): ?>
                                                        تحویل گرفته شد
                                                    <?php endif; ?>
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php if($order->OrderStatus == 4): ?>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.button','data' => ['class' => 'btn btn-elevated-success w-44 h-12 ml-1 mb-2 disabled:opacity-75 disabled:cursor-not-allowed','disabled' => true]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-elevated-success w-44 h-12 ml-1 mb-2 disabled:opacity-75 disabled:cursor-not-allowed','disabled' => true]); ?> سفارش تکمیل شد
                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    <?php else: ?>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.button','data' => ['wire:click' => '$emit(\'ChangeOrderStatus\','.e($order->id).')','class' => 'btn btn-elevated-primary w-44 h-12 ml-1 mb-2']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$emit(\'ChangeOrderStatus\','.e($order->id).')','class' => 'btn btn-elevated-primary w-44 h-12 ml-1 mb-2']); ?>
                                                            تبدیل وضعیت سفارش
                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    <?php endif; ?>
                                                    <button
                                                        wire:click="$emit('OrderDetails', <?php echo e($order->id); ?>)"
                                                        class="btn btn-elevated-secondary text-indigo-900 w-32 h-12 ml-1 mb-2"
                                                    >
                                                        جزئیات سفارش
                                                    </button>
                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/livewire/seller/archive-order.blade.php ENDPATH**/ ?>