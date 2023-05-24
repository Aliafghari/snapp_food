<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l668419654-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l668419654-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l668419654-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l668419654-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l668419654-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.discount-edit-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l668419654-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l668419654-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l668419654-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l668419654-1');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.discount-edit-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l668419654-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.food-discount-add-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l668419654-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l668419654-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l668419654-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l668419654-2');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.food-discount-add-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l668419654-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- BEGIN: Content -->
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <!-- BEGIN: Content -->
            <div class="content">
                <div class="intro-y flex flex-col sm:flex-row items-center mt-8">

                    <?php if (isset($component)) { $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8 = $component; } ?>
<?php $component = App\View\Components\Tables\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Tables\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        تنظیمات کدتخفیف
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8)): ?>
<?php $component = $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8; ?>
<?php unset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8); ?>
<?php endif; ?>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button wire:click="$emit('confirmDiscountAdd')" class="btn btn-primary shadow-md ml-2">افزودن
                            کد تخفیف جدید
                        </button>
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
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">عنوان تخفیف</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">نوع تخفیف</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">مقدار تخفیف</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">تاریخ انقضا</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">تعداد روز باقی
                                            مانده
                                        </th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $Discounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Discount): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $Discount->id % 2 == 0  ): ?>
                                            <tr>
                                        <?php else: ?>
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Discount->id); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Discount->title); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Discount->type); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Discount->amount); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Discount->ExpireTime); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php
                                                        $expireTime = \Carbon\Carbon::parse($Discount->ExpireTime);
                                                        echo $expireTime->diffInDays();
                                                    ?>
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <button class="btn btn-elevated-primary w-24 ml-1 mb-2"
                                                            wire:click="$emit('EditModalConfirm',<?php echo e($Discount->id); ?>)">
                                                        ویرایش
                                                    </button>
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.button','data' => ['class' => 'btn btn-elevated-secondary w-24 ml-1 mb-2 text-indigo-900','wire:click' => '$emit(\'DeleteModals\',\'App\\\Models\\\Discount\','.e($Discount->id).',\'حذف کد تخفیف\' ,\'آیا از حذف کد تخفیف '.e($Discount->title).' مطمئن هستید ؟\')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-elevated-secondary w-24 ml-1 mb-2 text-indigo-900','wire:click' => '$emit(\'DeleteModals\',\'App\\\Models\\\Discount\','.e($Discount->id).',\'حذف کد تخفیف\' ,\'آیا از حذف کد تخفیف '.e($Discount->title).' مطمئن هستید ؟\')']); ?>حذف
                                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
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
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/livewire/admin/discount-panel.blade.php ENDPATH**/ ?>