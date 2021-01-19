<?php
/*
 * Основной шаблон администратора
 */
?>
<h3 class="title title-form"><?=$title?></h3>
<div class="products-wrp">
  <?php if($goods):?>
    <?php foreach ($goods as $good):?>
			<div class="product">
				<a href="index.php?c=admin&act=good&id=<?= $good['id']?>" class="img-link">
					<img src="images/products/<?= $good['image']?>" alt="<?= $good['name']?> photo" class="prod-img">
				</a>
				<span class="prod-name"><?= $good['name']?></span>
				<span class="short-desc"><?= $good['short_desc']?></span>
				<span class="price"><?= $good['price']?></span>
				<a href="index.php?c=admin&act=good&id=<?= $good['id']?>" class="prod-link btn">Изменить</a>
				<button class="prod-link btn">Удалить</button>
			</div>
    <?php endforeach;?>
  <?php endif;?>
</div>