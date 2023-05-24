<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="light">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link href="dist/images/logo.svg" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- BEGIN: CSS Assets-->
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="<?php echo e(mix('/css/app.css')); ?>">
    <link rel="stylesheet" href="/dist/css/app.css"/>
    <?php echo \Livewire\Livewire::styles(); ?>

    <!-- END: CSS Assets-->
    <script src="<?php echo e(mix('/js/app.js')); ?>" defer></script>

</head>
<!-- END: Head -->
<body class="main">

<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('livewire-toast')->html();
} elseif ($_instance->childHasBeenRendered('mLIq23v')) {
    $componentId = $_instance->getRenderedChildComponentId('mLIq23v');
    $componentTag = $_instance->getRenderedChildComponentTagName('mLIq23v');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('mLIq23v');
} else {
    $response = \Livewire\Livewire::mount('livewire-toast');
    $html = $response->html();
    $_instance->logRenderedChild('mLIq23v', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('G4VuuiX')) {
    $componentId = $_instance->getRenderedChildComponentId('G4VuuiX');
    $componentTag = $_instance->getRenderedChildComponentTagName('G4VuuiX');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('G4VuuiX');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('G4VuuiX', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=['your-google-map-api']&libraries=places"></script>
<script src="/dist/js/app.js"></script>
<!-- END: JS Assets-->





</body>
</html>
<?php /**PATH C:\xampp\htdocs\Ali\snappfood-master\resources\views/layouts/app.blade.php ENDPATH**/ ?>