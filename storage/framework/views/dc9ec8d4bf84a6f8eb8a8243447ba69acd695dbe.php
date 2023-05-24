<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l1084492782-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1084492782-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1084492782-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1084492782-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1084492782-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.restaurant-category-add-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l1084492782-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1084492782-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1084492782-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1084492782-1');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.restaurant-category-add-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1084492782-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.restaurant-category-edit-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l1084492782-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1084492782-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1084492782-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1084492782-2');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.restaurant-category-edit-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1084492782-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <!-- BEGIN: Content -->
    <div class="wrapper wrapper--top-nav">
        <div class="wrapper-box">
            <!-- BEGIN: Content -->
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
                            <div class="overflow-x-auto">
                                <table class="border-separate border-spacing-2 border border-slate-400" style="display: flex; justify-content: center; ">
                                    <thead>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $Categories->id % 2 == 0  ): ?>
                                            <tr>
                                        <?php else: ?>
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Categories->id); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Categories->RestaurantType); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <button class="btn btn-elevated-primary w-24 ml-1 mb-2"
                                                            wire:click="$emit('EditModalConfirm',<?php echo e($Categories->id); ?>)">
                                                        ویرایش
                                                    </button>
                                                    <button
                                                        class="btn btn-elevated-secondary w-24 ml-1 mb-2 text-indigo-900"
                                                        wire:click="$emit('DeleteModals','\\App\\Models\\restaurantCategories',<?php echo e($Categories->id); ?>,'حذف دسته بندی رستوران' ,'آیا از حذف دسته بندی <?php echo e($Categories->RestaurantType); ?> مطمئن هستید ؟')"
                                                    >حذف
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
<!-- END: Content -->

<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/livewire/admin/categories.blade.php ENDPATH**/ ?>