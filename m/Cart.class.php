<?php

class Cart {

  public static function getOneGood ($id) {
    $query = "SELECT * FROM catalog WHERE id='$id'";
    $res = DB::getInstance()->Select($query);
    return $res;
  }

}