<?php

class AdminController extends BaseController {

  function translited($string) {
    $newStr = transliterator_transliterate("Russian-Latin/BGN", $string);
    return $str = str_replace(" ", "_", $newStr);
  }

  public function action_goods () {
    $this->title = 'Список товаров';
    $getGoods = new Admin();
    $goods = $getGoods->getGoods();

    $this->content = $this->Template('v/admin/v_main.php', array('title'=>$this->title, 'goods'=>$goods));

  }

  public function action_good (){
    if ($this->IsGet()) {
      $item = new Admin();
      $good = $item->getOneGood($_GET['id']);
    }
    foreach ($good as $item) {
      $this->title = 'Изменить '.$item['name'];
    }
    $this->content = $this->Template('v/admin/v_good.php', array('title'=>$this->title, 'good'=>$good));
  }

  public function action_add () {
    $this->title = 'Добавление товара';
    $this->content = $this->Template('v/admin/v_addGood.php', array('title'=>$this->title));

    if ($this->IsGet()) {
      $id = $_GET['id'];
      $this->content = $this->Template('v/admin/v_addGood.php', array('title'=>$this->title, 'id'=>$id));
    }

  }
}