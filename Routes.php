<?php

Autoloader::Register();

Route::set('index.php', function() {
      Index::CreateView('Index');

});

?>
