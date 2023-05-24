<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.restore-comment', [])->html();
} elseif ($_instance->childHasBeenRendered('l2029858155-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2029858155-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2029858155-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2029858155-0');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.restore-comment', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2029858155-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php $component = $__env->getContainer()->make(App\View\Components\Tables\Header::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('tables.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Tables\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                        مدیریت نظرات
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8)): ?>
<?php $component = $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8; ?>
<?php unset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8); ?>
<?php endif; ?>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <div class="p-5" id="striped-rows-table">
                        <div class="preview">
                            <div class="overflow-x-auto">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">ردیف</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">نام</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">ایمیل</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">شماره سفارش</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">وضعیت نظر</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">متن نظر</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">امتیاز</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $Row = 0 ?>
                                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $comment->id % 2 == 0  ): ?>
                                            <tr>
                                        <?php else: ?>
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e(++$Row); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($comment->user->name); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"> <?php echo e($comment->user->email); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($comment->orders_id); ?></td>
                                                <td class="border-b text-red-500 dark:border-dark-5 text-lg font-medium">
                                                    حذف شده
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($comment->opinion); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($comment->score); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <button class="btn btn-elevated-success w-32 ml-1 mb-2 p-1"
                                                            wire:click="$emit('RestoreComment',<?php echo e($comment->id); ?>,'باز گردانی نظر' ,'<?php echo e($comment->opinion); ?>')"
                                                    > بازگردانی نظر
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

<?php /**PATH C:\xampp\htdocs\Ali\snappfood-master\resources\views/livewire/admin/delete-comments.blade.php ENDPATH**/ ?>