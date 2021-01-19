<?php
/*
 * Шаблон изменения товара
 */
foreach ($good as $item):
?>
<div class="admin-form-wrp">
  <h3 class="title title-form"><?=$title?></h3>
  <form method="post" enctype="multipart/form-data" class="admin-form">
    <img src="/images/products/<?=$item['image']?>" alt="<?= $item['name']?>" name="image">
    <div class="desc-wrp">
      <lable>Название товара:<br><input type="text" name="name" maxlength="100" value="<?= $item['name']?>"></lable>
      <lable>Короткое описание:<br><input type="text" name="shortDesc" value="<?= $item['short_desc']?>"></lable>
      <p>Полное описание:</p><br>
      <textarea name="fullDesc" rows="10"><?= $item['full_desc']?></textarea>
      <lable>Цена:<br><input type="text" name="price" value="<?= $item['price']?>"></lable>
      <lable>Изменить картинку:<br><input type="file" name="image" accept="image/jpeg, image/png, image/gif"></lable>
      <input type="hidden" name="edit" value="<?= $item['id']?>">
      <button class="admin-form-btn btn" type="submit" name="submit">Сохранить</button>
    </div>
  </form>
</div>
<?php endforeach;?>