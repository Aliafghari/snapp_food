<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="white">
<!-- BEGIN: Head -->

<head>
    <meta charset="utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
        content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- BEGIN: CSS Assets-->
    <!-- Fonts -->
    

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">
    <link rel="stylesheet" href="/dist/css/app.css" />
    <?php echo \Livewire\Livewire::styles(); ?>

    <!-- END: CSS Assets-->
    <script src="<?php echo e(mix('/js/app.js')); ?>" defer></script>

</head>
<!-- END: Head -->

<body class="main">
    
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-toast')->html();
} elseif ($_instance->childHasBeenRendered('t5aQtdn')) {
    $componentId = $_instance->getRenderedChildComponentId('t5aQtdn');
    $componentTag = $_instance->getRenderedChildComponentTagName('t5aQtdn');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('t5aQtdn');
} else {
    $response = \Livewire\Livewire::mount('livewire-toast');
    $html = $response->html();
    $_instance->logRenderedChild('t5aQtdn', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('Sx7l6WR')) {
    $componentId = $_instance->getRenderedChildComponentId('Sx7l6WR');
    $componentTag = $_instance->getRenderedChildComponentTagName('Sx7l6WR');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Sx7l6WR');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('Sx7l6WR', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>

    <!-- Page Content -->
    <main>
        <?php echo e($slot); ?>

    </main>

    <?php echo $__env->yieldPushContent('modals'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <script src="http://127.0.0.1:8000/vendor/livewire-charts/app.js"></script>
    <!-- BEGIN: JS Assets-->
    
    <script src="/dist/js/app.js"></script>
    <!-- END: JS Assets-->
    
    
    
    
    
</body>

</html>
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snappfood\resources\views/layouts/app.blade.php ENDPATH**/ ?>