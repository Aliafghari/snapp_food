<div>
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
                        مدیریت گزارشات
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8)): ?>
<?php $component = $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8; ?>
<?php unset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8); ?>
<?php endif; ?>
                </div>
                <div class="intro-y box p-5 mt-5">
                    <div>
                        <h3 class="text-xl text-red-500 font-bold">دیدگاه ها</h3>
                        <h4 class="text-lg text-indigo-900 font-medium">فیلتر بر اساس : </h4>
                        <div class="space-y-4 sticky top-0 bg-white p-4 shadow z-50 flex flex-row justify-between">
                            <ul class="flex flex-col gap-6 sm:flex-row sm:space-x-8 sm:items-center">
                                <li>
                                    <input type="checkbox" value="confirm" wire:model="types"/>
                                    <span>تایید شده</span>
                                </li>
                                <li>
                                    <input type="checkbox" value="suspended" wire:model="types"/>
                                    <span>معلق</span>
                                </li>
                                <li>
                                    <input type="checkbox" value="reject" wire:model="types"/>
                                    <span>حذف شده</span>
                                </li>
                            </ul>

                            <div>
                                <input type="checkbox" value="other" wire:model="showDataLabels"/>
                                <span>نمایش اطلاعات جدول</span>
                            </div>
                        </div>

                        <div class="container mx-auto space-y-4 p-4 sm:p-0 mt-8">
                            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                                <div class="shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $columnChartModel])->html();
} elseif ($_instance->childHasBeenRendered(''.e($columnChartModel->reactiveKey()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e($columnChartModel->reactiveKey()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e($columnChartModel->reactiveKey()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e($columnChartModel->reactiveKey()).'');
} else {
    $response = \Livewire\Livewire::mount('livewire-column-chart', ['columnChartModel' => $columnChartModel]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e($columnChartModel->reactiveKey()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>

                                <div class="shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $pieChartModel])->html();
} elseif ($_instance->childHasBeenRendered(''.e($pieChartModel->reactiveKey()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e($pieChartModel->reactiveKey()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e($pieChartModel->reactiveKey()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e($pieChartModel->reactiveKey()).'');
} else {
    $response = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $pieChartModel]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e($pieChartModel->reactiveKey()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <h3 class="text-xl text-red-500 font-bold">سفارشات</h3>
                        <h4 class="text-lg text-indigo-900 font-medium">فیلتر بر اساس : </h4>
                        <div class="space-y-4 sticky top-0 bg-white p-4 shadow z-50 flex flex-row justify-between">
                            <ul class="flex flex-col gap-6 sm:flex-row sm:space-x-8 sm:items-center">
                                <li>
                                    <input type="checkbox" value="1" wire:model="Orders"/><span>در حال بررسی</span>
                                </li><li>
                                    <input type="checkbox" value="2" wire:model="Orders"/><span>در حال آماده سازی</span>
                                </li><li>
                                    <input type="checkbox" value="3" wire:model="Orders"/><span>ارسال به مقصد</span>
                                </li><li>
                                    <input type="checkbox" value="4" wire:model="Orders"/><span>تحویل گرفته شد</span>
                                </li>
                            </ul>

                            <div>
                                <input type="checkbox" value="other" wire:model="showDataLabels"/>
                                <span>نمایش اطلاعات جدول</span>
                            </div>
                        </div>

                        <div class="container mx-auto space-y-4 p-4 sm:p-0 mt-8">
                            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                                <div class="shadow rounded p-4 border bg-white flex-1" style="height: 32rem;">
                                    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $pieChartModelOrder])->html();
} elseif ($_instance->childHasBeenRendered(''.e($pieChartModelOrder->reactiveKey()).'')) {
    $componentId = $_instance->getRenderedChildComponentId(''.e($pieChartModelOrder->reactiveKey()).'');
    $componentTag = $_instance->getRenderedChildComponentTagName(''.e($pieChartModelOrder->reactiveKey()).'');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild(''.e($pieChartModelOrder->reactiveKey()).'');
} else {
    $response = \Livewire\Livewire::mount('livewire-pie-chart', ['pieChartModel' => $pieChartModelOrder]);
    $html = $response->html();
    $_instance->logRenderedChild(''.e($pieChartModelOrder->reactiveKey()).'', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END: Content -->

<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/livewire/admin/report-charts.blade.php ENDPATH**/ ?>