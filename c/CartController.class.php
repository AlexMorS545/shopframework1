<?php
class CartController extends BaseController {

  public function action_add () {

    if ($this->IsPost()) {
      $id = $_POST['id'];
      $getGood = new Cart();
      $good = $getGood->getOneGood($id);
    }
    return json_encode(print_r($good));
  }
}