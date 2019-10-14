<?	if (!$_PATH_) {
	header ("Location: /404.php");
}

	if ($_PAGE_) {
		echo '<a class="button button-primary u-full-width hide-overflow-text" href="/">Главная</a>';
	}
	if ($_PAGE_ != "search") {
		echo '<a class="button button-primary u-full-width hide-overflow-text" href="/?page=search">Поиск по базе</a>';
	}
	if ($_PAGE_ != "add") {
		echo '<a class="button u-full-width hide-overflow-text" href="/?page=add">Новое дело</a>';
	}

?>
<hr>
<a class="button u-full-width hide-overflow-text" href="/?emergence=true">Выход</a>