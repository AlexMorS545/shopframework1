<?php
//include_once 'config/config.php';

class DB {
  private static $instance = null;
  private $db;

  public static function getInstance () {

    if (self::$instance == null) {
      self::$instance = new self();
    }

    return self::$instance;
  }

  private function __construct() {
    $this->db = new PDO(DB_DRIVER.':host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME, DB_USER, DB_PASS,
      [
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
      ]
    );
  }

  public function Select ($query) {

    $res = $this->db->prepare($query);
    $res->execute();

    if($res->errorCode() != PDO::ERR_NONE) {
      $info = $res->errorInfo();
      die($info[2]);
    }
    return $res->fetchAll();
  }

  public function Insert ($table, $params) {
    $collum = array();
    foreach ($params as $key => $value) {
      $collum[] = $key;
      $sense[] = "'$value'";

      if ($value === null) {
        $params[$key] = 'NULL';
      }
    }

    $collum_s = implode(',', $collum);
    $sense_s = implode(',', $sense);

    $query = "INSERT INTO $table ($collum_s) VALUES ($sense_s)";
    $res = $this->db->prepare($query);
    $res->execute($params);

    if ($res->errorCode() != PDO::ERR_NONE) {
      $info = $res->errorInfo();
      die($info[2]);
    }

    return $this->db->lastInsertId();
  }

  public function Update($table, $params, $where) {
    $sets = array();

    foreach($params as $key => $value){

      $sets[] = "$key='$value'";

      if($value === NULL){
        $params[$key]='NULL';
      }
    }

    $sets_s = implode(',',$sets);
    $query = "UPDATE $table SET $sets_s WHERE $where";
    $res = $this->db->prepare($query);
    $res->execute($params);

    if($res->errorCode() != PDO::ERR_NONE){
      $info = $res->errorInfo();
      die($info[2]);
    }

    return $res->rowCount();
  }

  public function Delete($table, $where) {
    $query = "DELETE FROM $table WHERE $where";
    $q = $this->db->prepare($query);
    $q->execute();

    if($q->errorCode() != PDO::ERR_NONE){
      $info = $q->errorInfo();
      die($info[2]);
    }

    return $q->rowCount();
  }
}