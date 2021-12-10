<?php

Autoloader::Register();

Route::set('index.php', function() {
      Index::CreateView('Index');

});

Route::set('Films', function() {
      Movies::CreateView('movies');

});

Route::set('Events', function() {
      Events::CreateView('events');
});

Route::set('Location', function() {
      Maps::CreateView('Maps');
});

Route::callback();
?>
