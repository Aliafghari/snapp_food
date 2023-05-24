<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l1062127411-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l1062127411-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1062127411-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1062127411-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1062127411-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.food-category-edit-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l1062127411-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l1062127411-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1062127411-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1062127411-1');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.food-category-edit-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1062127411-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.food-category-add-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l1062127411-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l1062127411-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l1062127411-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l1062127411-2');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.food-category-add-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l1062127411-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                <table  class="w-full text-sm text-left text-blue-100 dark:text-blue-100">
                                    <thead>
                                    <tr class="bg-blue-500 border-b border-blue-400">
                                        <th  class="px-6 py-4">#</th>
                                        <th  class="px-6 py-4">نام دسته بندی</th>
                                        <th  class="px-6 py-4">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $Categories->id % 2 == 0  ): ?>
                                            <tr class="bg-blue-500 border-b border-blue-400">
                                        <?php else: ?>
                                            <tr class="bg-blue-500 border-b border-blue-400">
                                                <?php endif; ?>
                                                <td class="px-6 py-4"><?php echo e($Categories->id); ?></td>
                                                <td class="px-6 py-4"><?php echo e($Categories->FoodType); ?></td>
                                                <td class="px-6 py-4">
                                                    <button class="btn btn-elevated-primary w-24 ml-1 mb-2"
                                                            wire:click="$emit('EditModalConfirm',<?php echo e($Categories->id); ?>)">
                                                        ویرایش
                                                    </button>
                                                    <button
                                                        class="btn btn-elevated-secondary w-24 ml-1 mb-2 text-indigo-900"
                                                        wire:click="$emit('DeleteModals','App\\Models\\foodCategories',<?php echo e($Categories->id); ?>,'حذف غذا' ,'آیا از حذف غذای <?php echo e($Categories->FoodType); ?> مطمئن هستید ؟')"
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
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snappfood\resources\views/livewire/admin/food-category.blade.php ENDPATH**/ ?>