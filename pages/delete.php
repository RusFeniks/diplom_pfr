<?	if (!$_PATH_) {
	header ("Location: /404.php");
} ?>

<div class="row">
	<div class="three columns">
		<? include 'modules/menu.php' ?>
	</div>
	<div class="nine columns"><div class="helper-message u-full-width">
		<?
			if(checkRights(3)) {
				$request = "DELETE FROM pension_affairs WHERE ID=".$_GET['id'];
				if(accessToDataBase($request)) {
					echo "Операция выполнена успешно!";
				}
			} else {
				echo "У вас не достаточно прав для выполнения данной операции!";
			}
		?>
	</div></div>
</div>