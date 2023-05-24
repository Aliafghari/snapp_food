<link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css" integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ==" crossorigin="" />


<style>
    #<?php echo e($mapId); ?> {
    <?php if(! isset($attributes['style'])): ?>
        height: 100vh;
    <?php else: ?>
        <?php echo e($attributes['style']); ?>

    <?php endif; ?>
    }
</style>

<div id="<?php echo e($mapId); ?>" <?php if(isset($attributes['class'])): ?>
 class='<?php echo e($attributes["class"]); ?>'
<?php endif; ?>
></div>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.8.0/leaflet.js" integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script>

    var mymap = L.map('<?php echo e($mapId); ?>').setView([<?php echo e($centerPoint['lat'] ?? $centerPoint[0]); ?>, <?php echo e($centerPoint['long'] ?? $centerPoint[1]); ?>], <?php echo e($zoomLevel); ?>);
    <?php $__currentLoopData = $markers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $marker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
     <?php if(isset($marker['icon'])): ?>
       var icon = L.icon({
        iconUrl: '<?php echo e($marker['icon']); ?>',
        iconSize: [<?php echo e($marker['iconSizeX'] ?? 32); ?> , <?php echo e($marker['iconSizeY'] ?? 32); ?>],
       });
     <?php endif; ?>
    var marker = L.marker([<?php echo e($marker['lat'] ?? $marker[0]); ?>, <?php echo e($marker['long'] ?? $marker[1]); ?>]);
    marker.addTo(mymap);
    <?php if(isset($marker['info'])): ?>
    marker.bindPopup(<?php echo json_encode($marker['info'], 15, 512) ?>);
    <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <?php if($tileHost === 'mapbox'): ?>
        let url<?php echo e($mapId); ?> = 'https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=<?php echo e(config('maps.mapbox.access_token', null)); ?>';
    <?php elseif($tileHost === 'openstreetmap'): ?>
        let url<?php echo e($mapId); ?> = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    <?php else: ?>
        let url<?php echo e($mapId); ?> = '<?php echo e($tileHost); ?>';
    <?php endif; ?>
    L.tileLayer(url<?php echo e($mapId); ?>, {
        maxZoom: <?php echo e($maxZoomLevel); ?>,
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, ' +
            'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1
    }).addTo(mymap);

    mymap.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        marker.setLatLng([lat, lng])
        Livewire.emit('saveLocation', lat, lng)
    });

</script>
<?php /**PATH C:\Users\Ali\Documents\GitHub\snappfood\snapp_food\resources\views/vendor/maps/components/leaflet.blade.php ENDPATH**/ ?>