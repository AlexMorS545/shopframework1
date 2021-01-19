<?php
/*
 * Шаблон страницы продукта
 */

?>
<div class="item-wrp">
	<?php foreach ($good as $item):?>

		<div class="item">
			<img src="images/products/<?= $item['image']?>" alt="<?= $item['name']?> photo" class="item-img">
			<div class="desc">
				<span class="item-name"><?= $item['name']?></span>
				<span class="short-desc-item"><?= $item['short_desc']?></span>
				<p class="item-desc"><?= $item['full_desc']?></p>
				<span class="item-price"><?= $item['price']?></span>
				<a href="index.php?c=cart&act=add&id=<?= $item['id']?>" class="item-btn btn">Купить</a>
			</div>
		</div>

	<?php endforeach;?>

</div>
<!--asAjax-->