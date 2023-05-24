<div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('delete-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l2308280182-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2308280182-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2308280182-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2308280182-0');
} else {
    $response = \Livewire\Livewire::mount('delete-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2308280182-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('admin.modals.banner-modal', [])->html();
} elseif ($_instance->childHasBeenRendered('l2308280182-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l2308280182-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2308280182-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2308280182-1');
} else {
    $response = \Livewire\Livewire::mount('admin.modals.banner-modal', []);
    $html = $response->html();
    $_instance->logRenderedChild('l2308280182-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
                        تنظیمات بنر
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8)): ?>
<?php $component = $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8; ?>
<?php unset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8); ?>
<?php endif; ?>
                    <div class="w-full sm:w-auto flex mt-4 sm:mt-0">
                        <button wire:click="$emit('confirmBannerAdd')" class="btn btn-primary shadow-md ml-2">افزودن
                            بنر جدید
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
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">نام بنر</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">تصویر بنر</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $Row = 0;
                                    ?>
                                    <?php $__currentLoopData = $image; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pic): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="bg-gray-200 dark:bg-dark-1 h-64">
                                            <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e(++$Row); ?></td>
                                            <td class="report-box__indicator tooltip cursor-pointer border-b dark:border-dark-5 text-lg font-medium"
                                                title="<?php echo e($pic->name); ?>">
                                                <?php echo e(Str::limit($pic->name, 30)); ?>

                                            </td>
                                            <td class="w-2/3">
                                                <div class="flex">
                                                    <?php if(Storage::disk('public')->exists("$pic->path")): ?>
                                                        <div class="w-full h-56 image-fit zoom-in">
                                                            <img alt="Icewall Tailwind HTML Admin Template"
                                                                 class="tooltip rounded"
                                                                 src="<?php echo e(asset("storage/$pic->path")); ?>"
                                                                 title="بارگزاری شده در تاریخ : <?php echo e($pic->created_at); ?>"/>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </td>
                                            <td class="border-b dark:border-dark-5 text-lg font-medium">
                                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'btn btn-elevated-danger w-16 ml-1 mb-2 text-indigo-900','wire:click' => '$emit(\'DeleteModals\',\'\\\App\\\Models\\\Banner\','.e($pic->id).',\'حذف بنر\' ,\'آیا از حذف بنر '.e($pic->name).' مطمئن هستید ؟\')']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'btn btn-elevated-danger w-16 ml-1 mb-2 text-indigo-900','wire:click' => '$emit(\'DeleteModals\',\'\\\App\\\Models\\\Banner\','.e($pic->id).',\'حذف بنر\' ,\'آیا از حذف بنر '.e($pic->name).' مطمئن هستید ؟\')']); ?>حذف
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
<?php /**PATH C:\xampp\htdocs\Ali\snappfood-master\resources\views/livewire/admin/banner.blade.php ENDPATH**/ ?>