<div>
    <h4 class="text-lg text-indigo-900 font-bold">فیلتر بر اساس : </h4>
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
<?php /**PATH C:\xampp\htdocs\Ali\snappfood-master\resources\views/livewire/admin/charts/comment.blade.php ENDPATH**/ ?>