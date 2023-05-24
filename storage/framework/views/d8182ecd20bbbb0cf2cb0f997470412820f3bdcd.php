<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">

<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- BEGIN: CSS Assets-->
    
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <link rel="stylesheet" href="dist/css/app.css"/>
    <!-- END: CSS Assets-->

    <!-- Scripts -->
    <script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
</head>
<!-- END: Head -->

<body class="login overflow-hidden h-screen">
<div class="container sm:px-10">
    <?php echo e($slot); ?>

</div>

<!-- BEGIN: JS Assets-->
<script src="dist/js/app.js "></script>
<!-- END: JS Assets-->
</body>
</html>
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snappfood\resources\views/layouts/guest.blade.php ENDPATH**/ ?>