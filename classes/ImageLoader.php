<?php
class ImageLoader {
  public static function load($imagePath) {
    $path = base64_encode(file_get_contents($imagePath));
        echo $path;
    }
}
?>
