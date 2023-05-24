<div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dialog-modal','data' => ['wire:model' => 'ChangeOrderStatusModal']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'ChangeOrderStatusModal']); ?>
         <?php $__env->slot('title', null, []); ?> 
            <h2 class="font-medium text-base ml-auto">
                <?php echo e(isset($this->food->id) ? 'ویرایش غذا' : 'افزودن غذای جدید'); ?></h2>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('content', null, []); ?> 
            <div class="col-span-12">
                <?php if(isset($this->order)): ?>
                    <?php

                        if (isset(\App\Models\Orders::where('OrderStatus',$this->order->OrderStatus)->get()->first()->OrderStatus )){
                            if (\App\Models\Orders::where('OrderStatus',$this->order->OrderStatus)->get()->first()->OrderStatus == 1)
                                echo "<p style='direction:rtl' class='text-center'> تبدیل وضعیت از <span class='text-xl text-red-500'>در حال بررسی</span> به <span class='text-xl text-green-500'>در حال آماده سازی</span></p>";
                            elseif (\App\Models\Orders::where('OrderStatus','=',$this->order->OrderStatus)->get()->first()->OrderStatus == 2)
                                echo "<p style='direction:rtl' class='text-center'> تبدیل وضعیت از <span class='text-xl text-red-500'>در حال آماده سازی</span> به <span class='text-xl text-green-500'>ارسال به مقصد</span></p>";
                            elseif (\App\Models\Orders::where('OrderStatus','=',$this->order->OrderStatus)->get()->first()->OrderStatus == 3)
                                echo "<p style='direction:rtl' class='text-center'> تبدیل وضعیت از <span class='text-xl text-red-500'>ارسال به مقصد</span> به <span class='text-xl text-green-500'>تحویل گرفته شد</span></p>";
                            elseif (\App\Models\Orders::where('OrderStatus','=',$this->order->OrderStatus)->get()->first()->OrderStatus == 4|| \App\Models\Orders::where('OrderStatus','=',$this->order->OrderStatus)->get()->first()->OrderStatus == 5)
                                echo "تحویل گرفته شد";
                        }
                    ?>
                <?php endif; ?>
            </div>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.secondary-button','data' => ['wire:click' => '$set(\'ChangeOrderStatusModal\', false)','class' => 'btn btn-outline-secondary w-20 ml-1']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$set(\'ChangeOrderStatusModal\', false)','class' => 'btn btn-outline-secondary w-20 ml-1']); ?>
                <?php echo e(__('لغو')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.button','data' => ['class' => 'ml-2 btn btn-primary w-20','wire:click' => 'ConvertOrderStatus()']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'ml-2 btn btn-primary w-20','wire:click' => 'ConvertOrderStatus()']); ?>
                <?php echo e(__('ذخیره')); ?>

             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
         <?php $__env->endSlot(); ?>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
</div>
<?php /**PATH C:\xampp\htdocs\Ali\snappfood-master\resources\views/livewire/seller/modals/change-order-status-modal.blade.php ENDPATH**/ ?>