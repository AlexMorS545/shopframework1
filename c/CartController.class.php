<?php
class CartController extends BaseController {

  public function action_add () {

    if ($this->IsGet()) {
      $id = $_GET['id'];
      $good = Cart::getOneGood($id);
//      $good = $getGood->getOneGood($id);
    }
    return json_encode($good);
  }
}