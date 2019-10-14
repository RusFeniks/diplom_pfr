<?	if (!$_PATH_) {
	header ("Location: /404.php");
} ?>

<!DOCTYPE html>
<html lang="ru">
	<? include 'modules/meta.php' ?>
	<body>
		<div class="container">
			
			<div class="row">
				<div class="twelve columns">
					<? include 'modules/header.php' ?>
				</div>
			</div>

			<? include 'modules/content.php' ?>

			<div class="row">
				<div class="twelve columns">
					<? include 'modules/footer.php' ?>
				</div>
			</div>
			
		</div>
	</body>
</html>