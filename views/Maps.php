<?php
require_once './config.php';
require_once 'includes/_navbar.php';
?>
<style>
    <?php require_once './src/css/map.scss'; ?>
</style>
<div class="map-body">
    <div class="width"><h2 class="fs-700 uppercase text-compressed inspire-quote">Dit zijn alle huidige locaties van <span style="color: <?php echo SITE_COLOR; ?>"><?php echo SITE_NAME; ?></span>.</h2></div>
    <div class="map-container">
        <div id="map">

        </div>
    </div>
</div>



<script>
    <?php include_once './src/js/googlemaps.js'; ?>
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk6A-uHzS_wxNDTMu2aRKTakLY6GB5brg&map_ids=c627a9ba47d4b985&callback=initMap"></script>

<?php
require_once 'includes/_footer.php';
?>