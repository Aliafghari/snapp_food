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
                        کاربران
                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8)): ?>
<?php $component = $__componentOriginalee47a04028f789674b87105c4675a9890aa347c8; ?>
<?php unset($__componentOriginalee47a04028f789674b87105c4675a9890aa347c8); ?>
<?php endif; ?>
                    <div>
                        <button wire:click="$emit('ExportXlsx')">
                            export
                        </button>
                    </div>
                </div>
                <div id="layout-1-annual-fees" class="tab-pane flex flex-col lg:flex-row w-full"
                     role="tabpanel"
                     aria-labelledby="layout-1-annual-fees-tab w-full">
                    <div class="col-span-12 flex-row flex items-center justify-center w-full">
                        <label for="dateSearch"></label>
                        <select wire:model.debounce="search" wire:change="$emit('Users')" id="dateSearch"
                                data-placeholder="Select your favorite actors" data-search="true"
                                class="w-full form-control form-control-rounded"
                                style="background-position:left 0.5rem center !important;">
                            <option value="">AllUser</option>
                            <option value="Seller">Seller</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                </div>
                <div id="layout-1-annual-fees" class="tab-pane flex flex-col lg:flex-row w-full"
                     role="tabpanel"
                     aria-labelledby="layout-1-annual-fees-tab w-full">
                    <div class="col-span-12 flex-row flex items-center justify-center w-full">
                        <label for="dateSearchName"></label>
                        <input type="text" id="dateSearchName" wire:model.debounce="searchbyName" class="w-full form-control form-control-rounded"
                               style="background-position:left 0.5rem center !important;" placeholder="اسم کاربر مد نظر را ارد نمایید . . . .">
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
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">نام</th>
                                        <th class="border-b-2 dark:border-dark-5 whitespace-nowrap">ایمیل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $Row = 0 ?>
                                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if( $user->id % 2 == 0  ): ?>
                                            <tr>
                                        <?php else: ?>
                                            <tr class="bg-gray-200 dark:bg-dark-1">
                                                <?php endif; ?>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"><?php echo e(++$Row); ?></td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium justify-center flex flex-col">
                                                    <p>
                                                        <?php echo e($user->name); ?>

                                                    </p>
                                                    <?php if($user->role == 'seller'): ?>
                                                        <span
                                                            class="py-1 px-2 w-16 text-center rounded-full text-xs bg-blue-700 text-white cursor-pointer font-medium">
                                                            seller</span>
                                                    <?php elseif($user->role == 'user'): ?>
                                                        <span
                                                            class="py-1 px-2 w-16 text-center rounded-full text-xs
                                                            bg-emerald-700 text-white cursor-pointer font-medium">
                                                            user</span>
                                                    <?php endif; ?>
                                                </td>
                                                <td class="border-b dark:border-dark-5 text-lg font-medium"> <?php echo e($user->email); ?></td>
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

<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/livewire/admin/all-users.blade.php ENDPATH**/ ?>