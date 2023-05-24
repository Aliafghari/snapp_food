<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3860323393-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3860323393-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3860323393-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3860323393-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3860323393-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.modals.answer-comment-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3860323393-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3860323393-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3860323393-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3860323393-1');
} else {
    $response = \Livewire\Livewire::mount('seller.modals.answer-comment-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3860323393-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.modals.comment-referral-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3860323393-2')) {
    $componentId = $_instance->getRenderedChildComponentId('l3860323393-2');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3860323393-2');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3860323393-2');
} else {
    $response = \Livewire\Livewire::mount('seller.modals.comment-referral-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3860323393-2', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.modals.comment-confirm-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3860323393-3')) {
    $componentId = $_instance->getRenderedChildComponentId('l3860323393-3');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3860323393-3');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3860323393-3');
} else {
    $response = \Livewire\Livewire::mount('seller.modals.comment-confirm-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3860323393-3', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('seller.modals.show-and-edit-comment-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l3860323393-4')) {
    $componentId = $_instance->getRenderedChildComponentId('l3860323393-4');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3860323393-4');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3860323393-4');
} else {
    $response = \Livewire\Livewire::mount('seller.modals.show-and-edit-comment-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l3860323393-4', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                        لیست نظرات
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
                                    <?php $__currentLoopData = $Category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $Categories->id % 2 == 0  ): ?>
                                            <tr>
                                        <?php else: ?>
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e(++$Row); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Categories->user->name); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"> <?php echo e($Categories->user->email); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Categories->orders_id); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php if($Categories->status == 'suspended'): ?>
                                                        <span class="text-red-500">تایید نشده</span>
                                                    <?php elseif($Categories->status == 'confirm'): ?>
                                                        <span class="text-green-500">تایید شده</span>
                                                    <?php elseif($Categories->status == 'reject'): ?>
                                                        <span class="text-amber-500">ارجاع به مدیریت</span>
                                                    <?php endif; ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium tooltip cursor-pointer"
                                                    title="<?php echo e($Categories->opinion); ?>"><?php echo e(\Illuminate\Support\Str::limit($Categories->opinion,20)); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e($Categories->score); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                    <?php if($Categories->status == 'suspended'): ?>
                                                        <button class="btn btn-elevated-success w-24 ml-1 mb-2 p-2"
                                                                wire:click="$emit('ConfirmModal',<?php echo e($Categories->id); ?>)">
                                                            تایید
                                                        </button>
                                                        <?php if(\Illuminate\Support\Facades\DB::table('parent_child_comment')->where('parent_comment_id',$Categories->id)->first() != null): ?>
                                                            <?php
                                                                $parent = \Illuminate\Support\Facades\DB::table('parent_child_comment')->where('parent_comment_id',$Categories->id)->first()->child_comment_id
                                                            ?>
                                                            <?php if(\App\Models\Comment::where([['id',$parent],['user_id',1]])->first() != null): ?>
                                                                <button
                                                                    title="<?php echo e(\App\Models\Comment::where('id',$parent)->get()->first()->opinion); ?>"
                                                                    class="btn btn-elevated-secondary w-24 text-sm py-3 px-2 ml-1 mb-2 tooltip">
                                                                    پاسخ مدیریت
                                                                </button>
                                                            <?php endif; ?>
                                                        <?php else: ?>
                                                            <button
                                                                class="btn btn-elevated-warning w-24 text-sm py-3 px-2 ml-1 mb-2"
                                                                wire:click="$emit('referralComment',<?php echo e($Categories->id); ?>)">
                                                                ارجاع به مدیر
                                                            </button>
                                                        <?php endif; ?>
                                                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.button','data' => ['class' => 'btn btn-elevated-danger w-32 ml-1 mb-2 px-2 h-12 text-indigo-900','wire:click' => '$emit(\'confirmAndAnswerComment\','.e($Categories->id).')']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-elevated-danger w-32 ml-1 mb-2 px-2 h-12 text-indigo-900','wire:click' => '$emit(\'confirmAndAnswerComment\','.e($Categories->id).')']); ?>تایید و پاسخ
                                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                                                    <?php elseif($Categories->status == 'confirm'): ?>
                                                        <span
                                                            class="text-emerald-500"> کامنت تایید و قابل رویت گردید :)</span>
                                                        <button class="tooltip btn btn-outline-success mr-3"
                                                                title="
                                                                <?php echo e(\App\Models\Comment::find(DB::table('parent_child_comment')->where('parent_comment_id', $Categories->id)->get()->first()->child_comment_id)->opinion); ?>

                                                                "
                                                                wire:click="$emit('ShowAndEdit',<?php echo e($Categories->id); ?>)"
                                                        >نمایش پاسخ یا ویرایش
                                                        </button>
                                                    <?php elseif($Categories->status == 'reject'): ?>
                                                        <span
                                                            class="text-amber-600"> کامنت مدیریت ارجاع داده شد :)</span>
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
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snappfood\resources\views/livewire/seller/comments-panel-controller.blade.php ENDPATH**/ ?>