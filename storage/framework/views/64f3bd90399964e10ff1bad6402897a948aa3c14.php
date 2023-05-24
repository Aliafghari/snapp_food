<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.authentication-card','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-authentication-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
            <!-- BEGIN: Login Info -->

            <!-- END: Login Info -->

            <!-- BEGIN: Login Form -->
             <?php $__env->slot('LoginForm', null, []); ?> 
                <div
                    class="my-auto mx-auto xl:ml-20 bg-white dark:bg-dark-1 xl:bg-transparent px-5 sm:px-8 py-8 xl:p-0 rounded-md shadow-md xl:shadow-none w-full sm:w-3/4 lg:w-2/4 xl:w-auto">
                    <h2 class="intro-x font-bold text-2xl xl:text-3xl text-right xl:text-right ">
                        ورود
                    </h2>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'jetstream::components.validation-errors','data' => ['class' => 'mb-4']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('jet-validation-errors'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'mb-4']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

                    <?php if(session('status')): ?>
                        <div class="mb-4 font-medium text-sm text-green-600">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?php echo e(route('login')); ?>">
                        <?php echo csrf_field(); ?>
                        <div class="intro-x mt-8 ">
                            <label for="email"></label><input type="email"
                                                              class="intro-x login__input form-control py-3 px-4 border-gray-300 block "
                                                              name="email" :value="<?php echo old('email'); ?>" id="email" placeholder="ایمیل" autofocus>
                            <label for="password"></label><input type="password" id="password"
                                                                 class="intro-x login__input form-control py-3 px-4 border-gray-300 block mt-4 "
                                                                 placeholder="رمزعبور" name="password" required autocomplete="current-password">
                        </div>
                        <div class="intro-x flex text-gray-700 dark:text-gray-600 text-xs sm:text-sm mt-4 ">
                            <div class="flex items-center ml-auto ">
                                <input id="remember_me" name="remember" type="checkbox"
                                       class="form-check-input border ml-2">
                                <label class="cursor-pointer select-none " for="remember_me">مرا به خاطر داشته
                                    باش</label>
                            </div>
                            <?php if(Route::has('password.request')): ?>
                                <a href="<?php echo e(route('password.request')); ?>">
                                    <?php echo e(__('فراموشی رمز عبور؟')); ?>

                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="intro-x mt-5 xl:mt-8 text-right xl:text-right">
                            <button class="btn btn-primary py-3 px-4 w-full xl:w-32 xl:mr-3 align-top"
                                    type="submit"><?php echo e(__('ورود')); ?></button>
                            <a href="<?php echo e(route('register')); ?>"
                                class="btn btn-outline-secondary py-3 px-4 w-full xl:w-32 mt-3 xl:mt-0 align-top"><?php echo e(__('ثبت نام')); ?>

                            </a>
                        </div>
                    </form>
                </div>
             <?php $__env->endSlot(); ?>
            <!-- END: Login Form -->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/auth/login.blade.php ENDPATH**/ ?>