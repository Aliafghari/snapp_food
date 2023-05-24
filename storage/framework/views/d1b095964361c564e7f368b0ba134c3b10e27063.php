<!DOCTYPE html>
<html lang="en" class="dark">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Restaurant Application">
    <meta name="keywords"
          content="Snapp, SnappFood, Food, Restaurant, Pizza, Sandwich, Kebab">
    <meta name="author" content="LEFT4CODE">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- BEGIN: CSS Assets-->
    <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">
    <link rel="stylesheet" href="dist/css/app.css"/>
    <!-- END: CSS Assets-->
</head>
<!-- END: Head -->

<body class="main overflow-hidden">
<!-- BEGIN: Content -->
<div class="wrapper wrapper--top-nav mt-24">
    <div class="wrapper-box pt-16">
        <!-- BEGIN: Content -->
        <div class="content overflow-y-auto">
            <div class="grid grid-cols-12 gap-6">
                <?php if(Route::has('login')): ?>
                    <div class="hidden fixed top-0 right-0 px-6 py-4 w-full sm:flex justify-center">
                        <?php if(auth()->guard()->check()): ?>
                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'seller')): ?>
                            <a href="<?php echo e(url('/dashboard')); ?>"
                               class="btn btn-outline-success w-24 py-4 inline-block ml-1 mb-2 rounded-full shadow-md transition-all animate-pulse hover:bg-green-500">GO TO THE PAGE</a>
                            <span class="btn btn-outline-info text-indigo-400 font-bold px-2 py-1 h-14 mr-3">Hello : <?php echo e(auth()->user()->name); ?></span>
                            <?php endif; ?>
                            <?php if(\Spatie\Permission\PermissionServiceProvider::bladeMethodWrapper('hasRole', 'superadmin')): ?>
                            <a href="<?php echo e(url('/Admin')); ?>" class="btn btn-outline-success text-indigo-400 font-bold px-2 py-1 h-14 ml-auto text-lg">GO TO THE PAGE</a>
                            <span class="text-indigo-400 font-bold px-2 py-1 h-14 ml-auto text-lg">Hello   <?php echo e(auth()->user()->name); ?></span>
                            <?php endif; ?>
                        <?php else: ?>
                            <a href="<?php echo e(route('login')); ?>" class="btn btn-elevated-secondary  ml-4 mb-4 p-5">login</a>

                            <?php if(Route::has('register')): ?>
                                <a href="<?php echo e(route('register')); ?>" class="btn btn-elevated-primary  ml-4 mb-4 p-5">register</a>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
                <div class="col-span-12 xxl:col-span-12">
                    <div class="grid grid-cols-1 gap-6">
                        <?php echo e($slot); ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content -->
    </div>
</div>
<!-- END: Content -->

<!-- BEGIN: JS Assets-->

<script
    src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script>
<script src="dist/js/app.js"></script>
<!-- END: JS Assets-->
</body>

</html>
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/layouts/index.blade.php ENDPATH**/ ?>