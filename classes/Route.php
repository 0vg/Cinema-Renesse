<?php
class Route {
    //Base route folder, laad de valide routes in en haalt de huidige routes op.
    public static $validRoutes = array();
    public static function set($route, $function) {
        self::$validRoutes[] = $route;

        //print_r(self::$validRoutes);
        if ($_GET['url'] == $route){
            $function->__invoke();
        }
        //__invoke
    }

    public static function printRoutes() {
        print_r(self::$validRoutes);
    }

    public static function imageException() {
    }

    public static function callback(){
        if (in_array($_GET['url'], self::$validRoutes))
        {
        }
        else {
            include_once("./views/Error.php");
        }
    }
}
?>
