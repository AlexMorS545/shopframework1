<?php
/*
 * Шаблон страницы каталога
 */
?>
<h3 class="cat-title"><?=$title?></h3>
<div class="products-wrp">
		<?php if($goods):?>
			<?php foreach ($goods as $good):?>
				<div class="product">
					<a href="index.php?c=page&act=item&id=<?= $good['id']?>" class="img-link">
						<img src="images/products/<?= $good['image']?>" alt="<?= $good['name']?> photo" class="prod-img">
					</a>
					<span class="prod-name"><?= $good['name']?></span>
					<span class="short-desc"><?= $good['short_desc']?></span>
					<span class="price"><?= $good['price']?></span>
					<a href="#" class="prod-link btn" data-id="<?= $good['id']?>">В корзину</a>
				</div>
			<?php endforeach;?>
		<?php endif;?>
</div>