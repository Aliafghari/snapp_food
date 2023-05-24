<div class="fixed <?php echo e($positionCss); ?> <?php if($hideOnClick): ?> cursor-pointer <?php endif; ?>" x-data="{ show: false, timeout: null, duration: null }"
    <?php if($message): ?> x-init="() => { duration = window.livewire.find('<?php echo e($_instance->id); ?>').duration; clearTimeout(timeout); show = true;
                if( duration > 0 ) {timeout = setTimeout(() => { show = false }, duration); }}" <?php endif; ?>
    @new-toast.window="duration = window.livewire.find('<?php echo e($_instance->id); ?>').duration; clearTimeout(timeout); show = true;
                if( duration > 0 ) { timeout = setTimeout(() => { show = false }, duration); }"
    @click="if(window.livewire.find('<?php echo e($_instance->id); ?>').hideOnClick) { show = false; }" x-show="show" <?php if($transition): ?>
    x-transition:enter="transition ease-in-out duration-300"
    x-transition:enter-start="opacity-0 transform <?php echo e($this->transitioClasses['enter_start_class']); ?>"
    x-transition:enter-end="opacity-100 transform <?php echo e($this->transitioClasses['enter_end_class']); ?>"
    x-transition:leave="transition ease-in-out duration-500"
    x-transition:leave-start="opacity-100 transform <?php echo e($this->transitioClasses['leave_start_class']); ?>"
    x-transition:leave-end="opacity-0 transform <?php echo e($this->transitioClasses['leave_end_class']); ?>"
    <?php endif; ?>
    style="z-index: 9999999"
    >
    <?php if($message): ?>
        <div
            class="flex bg-<?php echo e($bgColorCss); ?>-500 rounded-xl border-l-4 border-<?php echo e($bgColorCss); ?>-700 py-4 px-6 shadow-md mb-2 ">
            <!-- icons -->
            <?php if($showIcon): ?>
                <div class="text-<?php echo e($bgColorCss); ?>-500 rounded-full bg-<?php echo e($textColorCss); ?> ml-3">
                    <?php echo $__env->make('livewire-toast::icons.' . $type, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            <?php endif; ?>
            <!-- message -->
            <div class="text-<?php echo e($textColorCss); ?> text-lg max-w-xs ">
                <?php echo e($message); ?>

            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snappfood\resources\views/vendor/livewire-toast/livewire/livewire-toast.blade.php ENDPATH**/ ?>