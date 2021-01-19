<?php
/**
 * Шаблон страницы регистрации
 */
if (!isset($user)):
?>
<h3 class="title title-form"><?=$title?></h3>
<form method="post" class="form">
  <input type="text" class="login" name="name" required placeholder="Ваше login">
  <input type="email" class="email" name="email" required placeholder="Ваш email">
  <input type="password" class="pass" name="pass" required placeholder="Ваш пароль">
	<button type="submit" class="btn form-btn" name="reg">Регистрация</button>
</form>
<?php else:?>
	<?=$user?>
<?php endif;?>
