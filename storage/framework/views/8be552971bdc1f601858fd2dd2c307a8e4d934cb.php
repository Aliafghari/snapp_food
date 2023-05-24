<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3326729378-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3326729378-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3326729378-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3326729378-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3326729378-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.restaurant-category-add-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3326729378-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3326729378-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3326729378-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3326729378-1');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.restaurant-category-add-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3326729378-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.restaurant-category-edit-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3326729378-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3326729378-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3326729378-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3326729378-2');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.restaurant-category-edit-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3326729378-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

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
                                    <?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $Categories->id % 2 == 0  ): ?>
                                            <tr class="bg-blue-500 border-b border-blue-400">
                                        <?php else: ?>
                                            <tr class="bg-blue-500 border-b border-blue-400">
                                                <?php endif; ?>
                                                <td class="px-6 py-4"><?php echo e($Categories->id); ?></td>
                                                <td class="px-6 py-4"><?php echo e($Categories->RestaurantType); ?></td>
                                                <td class="px-6 py-4">
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



<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snappfood\resources\views/livewire/admin/categories.blade.php ENDPATH**/ ?>