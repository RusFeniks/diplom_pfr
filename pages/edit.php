<?	if (!$_PATH_) {
	header ("Location: /404.php");
} ?>

<div class="row">
	<div class="three columns">
		<? include 'modules/menu.php' ?>
	</div>
	<div class="nine columns">
		<? if (checkRights(2)) { ?>
		<form method="post" action="functions/edit_retirement_matter.php">
			<input type="text" name="ID" id="ID" value="<? echo $_GET['id']; ?>" hidden>
			<?
				$request = "SELECT * FROM pension_affairs WHERE ID=".$_GET['id'];
				if ($row = mysqli_fetch_array(accessToDataBase($request))) {
					include 'modules/edit_form.php';
				}
			?>
			<div class="row">
				<div class="twelve columns">
					<input class="button-primary" type="submit" name="submit" value="Сохранить">
					<input class="button" type="reset" name="submit" value="Сбросить изменения">
				</div>
			</div>
		</form>
		<? } else {
			echo '<div class="helper-message u-full-width">У вас не достаточно прав для выполнения данной операции!</div>';
		} ?>
	</div>
</div>