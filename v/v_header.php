<div class="header-wrp">
  <div class="logo-wrp">
    <div class="logo"></div>
    <div class="logo-name">Brand</div>
  </div>
  <div class="menu-wrp">
    <ul class="menu">
				<a class="menu-link" href="index.php">Главная</a>
				<a class="menu-link" href="index.php?c=page&act=review">Отзывы</a>
				<a class="menu-link" href="index.php?c=page&act=catalog">каталог</a>
      <?php if (!$user):?>
				<a class="menu-link" href="index.php?c=user&act=reg">Регистрация</a>
				<a class="menu-link" href="index.php?c=user&act=login">Войти</a>
				<a href="index.php?c=page&act=cart"><i class="fas fa-shopping-basket"></i></a>
				<?php else:?>
					<?php foreach	($user as $u):?>
						<?php if ($u['role'] == 1):?>
							<a class="menu-link" href="index.php?c=admin&act=goods">Товары</a>
							<a class="menu-link" href="index.php?c=admin&act=add">Добавить товар</a>
							<a class="menu-link" href="index.php?c=admin&act=order">Заказы</a>
							<a class="menu-link" href="index.php?c=user&act=logout">Выйти</a>
						<?php else:?>
							<a class="menu-link" href="index.php?c=user&act=account">Личный кабинет</a>
							<a class="menu-link" href="index.php?c=user&act=logout">Выйти</a>
							<a href="#"><i class="fas fa-shopping-basket"></i></a>
						<?php endif;?>
					<?php endforeach;?>
				<?php endif;?>
		</ul>
  </div>
</div>