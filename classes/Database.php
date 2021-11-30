<?php
require_once './config.php';

class Database {
  //verbind met onze database
  public static $host = DB_HOST; //server naam - normaal localhost
  public static $dbName = DB_NAME; // Naam van de database
  public static $username = DB_USER; //Pas aan als dit nodig is
  public static $password = DB_PASS; //In xamppp is dit normaal leeg maar pas aan als dit nodig is.
  
  private static function connect() {
    $pdo = new PDO("mysql:host=".self::$host.";dbname=".self::$dbName,self::$username, self::$password); //Gebruik de variables die we eerder hebben ge-set
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
  
  public static function query($query, $params = array()) {
        $statement = self::connect()->prepare($query);
        $statement->execute($params);
        if (explode(' ', $query)[0] == 'SELECT') {
        $data = $statement->fetchAll();
        return $data;
        }
    }
}
?>
