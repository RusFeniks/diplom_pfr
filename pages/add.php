<?	if (!$_PATH_) {
	header ("Location: /404.php");
} ?>

<div class="row">
	<div class="three columns">
		<? include 'modules/menu.php' ?>
	</div>
	<div class="nine columns">
		<form method="post" action="functions/add_retirement_matter.php">
			<? include 'modules/form.php'; ?>
			<div class="row">
				<div class="twelve columns">		
					<input class="button-primary" type="submit" name="submit" value="Добавить дело">
					<input type="reset" name="reset" value="Очистить форму">
				</div>
			</div>

		</form>
	</div>
</div>