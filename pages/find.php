<?	if (!$_PATH_) {
	header ("Location: /404.php");
} ?>

<div class="row">
	<div class="three columns">
		<? include 'modules/menu.php' ?>
	</div>
	<div class="nine columns">
		<? if (checkRights(1)) { ?>
		<form method="post" action="?page=search">
			<?
				$row = $_GET;
				include 'modules/find_form.php';
			?>
			<div class="row">
				<div class="twelve columns">
					<input class="button-primary" type="submit" name="submit" value="Применить фильтр">
				</div>
			</div>
		</form>
		<table class="u-full-width">
			<thead><tr>
				<td>ID</td>
				<td>ФИО</td>
				<td>Дата рождения</td>
				<td>СНИЛС</td>
				<td>Управление</td>
			</tr></thead>
			<?
			$request = "SELECT ID, Name, Surname, Patronymic, Date_of_birth, Insurance FROM pension_affairs WHERE Gender = 1";
			$request_count = "SELECT count(*) FROM pension_affairs WHERE Gender = 1";
			$filtres = "";
			if ($_GET["order"]) {
				$filtres = $filtres." ORDER BY ".$_GET["order"];
				if ($_GET["invert"]) {
					$filtres = $filtres." DESC";
				}
			}
			if ($result = mysqli_fetch_row(accessToDataBase($request_count.$filtres))) {
				$count_of_records = $result[0];
				$pages = ceil($count_of_records/$records_on_page);
				$p = $_GET["p"] - 1;
				if ($p < 0) { $p = 0; }
				$sample = " LIMIT ".$records_on_page * $p.", ".$records_on_page;
			}

			if ($result = accessToDataBase($request.$filtres.$sample)) {
				while ($row = mysqli_fetch_array($result)) {
					echo "<tr>";
						echo "<td>".$row['ID']."</td>";
						echo "<td>".$row['Surname']." ".$row['Name']." ".$row['Patronymic']." "."</td>";
						echo "<td>".$row['Date_of_birth']."</td>";
						echo "<td>".$row['Insurance']."</td>";
						echo "<td>"."
						<a href='?page=view&id=".$row['ID']."'><img class='tools-icon' src='img/view.png'></a>
						<a href='?page=edit&id=".$row['ID']."'><img class='tools-icon' src='img/edit.png'></a>
						<a href='?page=delete&id=".$row['ID']."' onclick=\"return confirm('Подтвердите удаление дела №".$row['ID']."')\"><img class='tools-icon' src='img/delete.png'></a>
						"."</td>";
					echo "</tr>";
				}
			} else {
				echo "<tr><td colspan='5'>Нет результатов по вашему запросу.</td></tr>";
			}

			if ($pages > 1) {
				echo "<tr><td colspan='5'>";
					echo "<div class='page-nav'>";

						for($i = 1; $i <= $pages; $i++) {
							if ($i == ($p + 1)) {
								echo "<a class='selected' href='";
							} else {
								echo "<a href='";
							}
							addURL(['p'=>$i]);
							echo "'>$i</a>";
						}

					echo "</div>";
				echo "</td></tr>";
			}
			?>
		</table>
		<? } else {
			echo '<div class="helper-message u-full-width">У вас не достаточно прав для выполнения данной операции!</div>';
		} ?>
	</div>
</div>