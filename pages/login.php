<?	if (!$_PATH_) {
	header ("Location: /404.php");
} ?>

<hr>
<div class="row">
	<div class="twelve columns">
		<div class="helper-message u-full-width">Авторизируйтесь в системе, чтобы продолжить использование.</div>
	</div>
</div>
<hr>
<div class="row">
	<div class="twelve columns">
		<form method="post" action="/">
			<div class="row">
				<div class="six columns">
					<input class="u-full-width" type="text" placeholder="Логин" id="Login" name="Login">
				</div>
				<div class="six columns">
					<input class="u-full-width" type="password" placeholder="Пароль" id="Password" name="Password">
				</div>
			</div>
			<div class="row">
				<input class="button-primary u-full-width" type="submit" value="Войти">
			</div>
		</form>
	</div>
</div>