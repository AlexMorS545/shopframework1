<?php

class Cart {

  public function getOneGood ($id) {
    $query = "SELECT * FROM catalog WHERE id='$id'";
    $res = DB::getInstance()->Select($query);
    return $res;
  }

}