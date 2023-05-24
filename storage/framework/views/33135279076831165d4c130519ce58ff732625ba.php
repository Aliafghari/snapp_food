<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
<!-- BEGIN: Head -->
<head>
    <meta charset="utf-8">
    
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
          content="Icewall admin is super flexible, powerful, clean & modern responsive tailwind admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Icewall Admin Template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="LEFT4CODE">
    <title><?php echo e(config('app.name', 'Laravel')); ?></title>
    <!-- BEGIN: CSS Assets-->
    <!-- Fonts -->
    

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
} elseif ($_instance->childHasBeenRendered('LlUepH5')) {
    $componentId = $_instance->getRenderedChildComponentId('LlUepH5');
    $componentTag = $_instance->getRenderedChildComponentTagName('LlUepH5');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('LlUepH5');
} else {
    $response = \Livewire\Livewire::mount('livewire-toast');
    $html = $response->html();
    $_instance->logRenderedChild('LlUepH5', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('navigation-menu')->html();
} elseif ($_instance->childHasBeenRendered('A180vxJ')) {
    $componentId = $_instance->getRenderedChildComponentId('A180vxJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('A180vxJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('A180vxJ');
} else {
    $response = \Livewire\Livewire::mount('navigation-menu');
    $html = $response->html();
    $_instance->logRenderedChild('A180vxJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/layouts/app.blade.php ENDPATH**/ ?>