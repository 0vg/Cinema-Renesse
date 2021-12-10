<?php
require_once './config.php';
require_once 'includes/_navbar.php';

//// KRIJG DE LAATSTE MOVIE
$latestmovie = Database::query("SELECT movieImage FROM movie ORDER BY movieId DESC LIMIT 0, 7");

$row = Database::query("SELECT * FROM movie");
$i = 1;
?>
<div class="body-movies">
<div class="movie-container-grid margin-top">
    <div class="feature-grid-container grid grid--columns">
        <div class="feature-grid-text">
            <h2 class="fs-700 uppercase text-compressed inspire-quote">BIJ FAST MOVIES ATLIJD DE <span style="color: <?php echo SITE_COLOR; ?>">NIEUWSTE</span>
            FILMS.
            KOM GEZELLIG LANGS</h2>
        </div>
        <div class="grid feature-grid">
            <a href="#"><div class="image1"><img src="data:image/jpeg;base64,<?php ImageLoader::load($latestmovie[0]['movieImage']); ?>" alt=""></div></a>
            <a href="#" ><div class="image2"><img src="data:image/jpeg;base64,<?php ImageLoader::load($latestmovie[1]['movieImage']); ?>" alt=""></div></a>
            <a href="#"><div class="image2"><img src="data:image/jpeg;base64,<?php ImageLoader::load($latestmovie[2]['movieImage']); ?>" alt=""></div></a>
            <a href="#"><div class="image1"><img src="data:image/jpeg;base64,<?php ImageLoader::load($latestmovie[3]['movieImage']); ?>" alt=""></div></a>
            <a href="#"><div class="image1"><img src="data:image/jpeg;base64,<?php ImageLoader::load($latestmovie[4]['movieImage']); ?>" alt=""></div></a>
            <a href="#"><div class="image3"><img src="data:image/jpeg;base64,<?php ImageLoader::load($latestmovie[5]['movieImage']); ?>" alt=""></div></a>
            <a href="#"><div class="image1"><img src="data:image/jpeg;base64,<?php ImageLoader::load($latestmovie[6]['movieImage']); ?>" alt=""></div></a>
        </div>
    </div>
</div>

<div class="margin-top-large"></div>
    <div class="shift-content">
        <?php foreach($row as $movie) : ?>
            <?php if(strlen($movie['movieDescription']) > 100) $moviedescription = substr($movie['movieDescription'], 0, 100).'...'; ?>
            <?php if($i < 2) : ?>
            <div class="movie-list-container">
                <div class="movie-list-wrapper">
                    <div class="movie-list">
            <?php endif; ?>
                        <div class="movie-list-item">
                            <img class="movie-list-item-img" src="data:image/jpeg;base64,<?php ImageLoader::load($movie['movieImage']); ?>" alt="">
                            <span class="movie-list-item-title"><?php echo $movie['movieName'] ?></span>
                            <p class="movie-list-item-desc"><?php echo $moviedescription ?></p>
                            <button class="movie-list-item-button">Watch</button>
                        </div>
            <?php if($i > 3) : ?>
                <?php $i = 0; ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php $i++; ?>
        <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'includes/_footer.php';
?>
</div>