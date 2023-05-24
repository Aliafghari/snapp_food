<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l2743597145-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2743597145-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2743597145-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2743597145-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2743597145-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                                    <?php $__currentLoopData = $AllComments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $AllComment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $AllComment->id % 2 == 0  ): ?>
                                            <tr>
                                        <?php else: ?>
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e(++$Row); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium justify-center flex flex-col">
                                                    <p>
                                                        <?php echo e($AllComment->user->name); ?>

                                                    </p>
                                                    <?php if($AllComment->user->role == 'seller'): ?>
                                                        <span
                                                            class="py-1 px-2 rounded-full text-xs bg-cyan-400 text-white cursor-pointer font-medium">
                                                            seller</span>
                                                    <?php elseif($AllComment->user->role == 'user'): ?>
                                                        <span
                                                            class="py-1 px-2 rounded-full text-xs
                                                            bg-fuchsia-500 text-white cursor-pointer font-medium">
                                                            user</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"> <?php echo e($AllComment->user->email); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($AllComment->orders_id); ?></td>
                                                <td class="border-b text-amber-500 dark:border-dark-5 text-lg font-medium">
                                                    <?php if($AllComment->status == 'suspended'): ?>
                                                        <span class="text-red-500">تایید نشده</span>
                                                    <?php elseif($AllComment->status == 'confirm'): ?>
                                                        <span class="text-green-500">تایید شده</span>
                                                    <?php elseif($AllComment->status == 'reject'): ?>
                                                        <span class="text-amber-500">ارجاع به مدیریت</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($AllComment->opinion); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($AllComment->score); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'btn btn-elevated-danger w-20 ml-1 mb-2 px-2 h-8 text-indigo-900','wire:click' => '$emit(\'DeleteModals\',\'\\\App\\\Models\\\Comment\','.e($AllComment->id).',\'حذف غذا\' ,\'آیا از حذف غذای '.e($AllComment->user->name).' مطمئن هستید ؟\')']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-elevated-danger w-20 ml-1 mb-2 px-2 h-8 text-indigo-900','wire:click' => '$emit(\'DeleteModals\',\'\\\App\\\Models\\\Comment\','.e($AllComment->id).',\'حذف غذا\' ,\'آیا از حذف غذای '.e($AllComment->user->name).' مطمئن هستید ؟\')']); ?>حذف
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
<!-- END: Content -->

<?php /**PATH C:\xampp\htdocs\Ali\snappfood-master\resources\views/livewire/admin/all-comment.blade.php ENDPATH**/ ?>