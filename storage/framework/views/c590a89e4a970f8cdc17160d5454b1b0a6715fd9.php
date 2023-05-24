<div>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.dialog-modal','data' => ['wire:model' => 'OrderDetailsModal']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-dialog-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'OrderDetailsModal']); ?>
         <?php $__env->slot('title', null, []); ?> 
            <h2 class="font-medium text-base ml-auto">
                <?php echo e(__('جزئیات سفارش')); ?>

            </h2>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('content', null, []); ?> 
            <div class="col-span-12 sm:col-span-12">
                <div class="mt-3">
                    <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
                        <table class="table table-report -mt-2">
                            <thead>
                            <tr>
                                <th class="whitespace-nowrap">نام کاربر</th>
                                <th class="whitespace-nowrap">نام غذا</th>
                                <th class="text-center whitespace-nowrap">تعداد</th>
                                <th class="text-center whitespace-nowrap">قیمت</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php if(isset($this->details) && !empty($this->details)): ?>
                                <?php $__currentLoopData = $this->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="intro-x">
                                        <td class="w-40">
                                            <span class="font-medium whitespace-nowrap">
                                            <?php echo e(\App\Models\Food::where('id',$item->food_id)->get()->first()->title); ?>

                                            </span>
                                        </td>
                                        <td>
                                            <span class="font-medium whitespace-nowrap">
                                                <?php echo e(\App\Models\User::where('id',\App\Models\Cart::find($item->cart_id)->get()->first()->user_id)->get()->first()->name); ?>

                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <span class="font-medium whitespace-nowrap">
                                            <?php echo e($item->count); ?>

                                            </span>
                                        </td>
                                        <td class="w-40">
                                            <span class="flex items-center justify-center text-theme-10">
                                                <?php echo e(\App\Models\Cart::where('id',$item->cart_id)->get()->first()->price); ?>

                                            </span>
                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php
                                    unset($this->details)
                                ?>
                            <?php endif; ?>
                            </tbody>
                        </table>
                        <span class="flex items-center justify-center text-emerald-500 text-lg">مجموع قیمت : <?php echo e($this->total); ?></span>
                    </div>
                </div>
            </div>
         <?php $__env->endSlot(); ?>

         <?php $__env->slot('footer', null, []); ?> 
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.secondary-button','data' => ['wire:click' => '$set(\'OrderDetailsModal\', false)','class' => 'btn btn-outline-secondary w-20 ml-1']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-secondary-button'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:click' => '$set(\'OrderDetailsModal\', false)','class' => 'btn btn-outline-secondary w-20 ml-1']); ?>
                <?php echo e(__('بستن')); ?>

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
<?php /**PATH C:\xampp\htdocs\Ali\snappfood-master\resources\views/livewire/seller/modals/order-details-modal.blade.php ENDPATH**/ ?>