<?php

class Database {

  public static $host = "localhost";
  public static $dbName = "mvc";
  public static $username = "root";
  public static $password = "root";

 private static function connect() {
    $pdo = new PDO('mysql:host=".self::$host";dbname=".self::$dbName";charset=utf8',self::$userName,self::$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $pdo;

 }

 public static function query($query, $params = []) {
    $statement = self::connect()->prepare($query);
    $statement->execute($params);

    if(explore(' ', $query)[0] == 'SELECT') {
      $data = $statement->fetchAll();
      return $data;
    }
 }

}