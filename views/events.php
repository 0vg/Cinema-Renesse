<?php
require_once './config.php';
require_once 'includes/_navbar.php';


$row = Database::query("SELECT * FROM events");
$i = 1;
?>
<style>
    <?php include_once './src/css/events.scss'; ?>
</style>

<div class="body-events">
<div class="margin-top-large"></div>
    <div class="shift-content">
        <div class="movie-list-container">
            <?php foreach($row as $event) : ?>
                <?php if(strlen($event['eventDiscription']) > 100) $eventdesc = substr($event['eventDiscription'], 0, 100).'...'; ?>
                 <?php if($i < 2) : ?>
                    <div class="event-list-wrapper">
                        <div class="event-list">
                <?php endif; ?>
                    <section class="card-container">
                        <div class="card">
                            <div class="img-container">
                                <div class="bg-circle">

                                </div>
                                <img src="data:image/jpeg;base64,<?php ImageLoader::load($event['eventImage']); ?>" alt="" class="img" style="height: 110px; width: 110px;"/>
                            </div>
                            <h3 class="title"><?php echo $event['eventTitle']; ?></h3>

                            <p class="description"><?php echo $eventdesc; ?></p>
                            <button class="purchase-btn" style="margin-top: 20px;">Purchase</button>
                        </div>
                    </section>
                    <?php if($i > 3) : ?>
                <?php $i = 0; ?>
                    </div>
                </div>
                <?php endif; ?>
            <?php $i++; ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
require_once 'includes/_footer.php';
?>