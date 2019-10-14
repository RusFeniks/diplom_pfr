<?	if (!$_PATH_) {
	header ("Location: /404.php");
} ?>

<div class="row">
	<div class="three columns">
		<? include 'modules/menu.php' ?>
	</div>
	<div class="nine columns">
		<table class="u-full-width view">
		<?
			$request = "SELECT * FROM pension_affairs WHERE ID=".$_GET['id'];
			if($row = mysqli_fetch_array(accessToDataBase($request))) {

				switch ($row['Gender']) {
					case 1: $Gender = "Женщина"; break;
					case 2: $Gender = "Мужчина"; break;
				}

				switch ($row['Status']) {
					case 1: $Status = "Открыто"; break;
					case 2: $Status = "Утверждено"; break;
					case 3: $Status = "Закрыто"; break;
				}
				
				echo "<tr><td class='b'>ID:</td>
					<td class=''>".$row['ID']." [ $Status ]</td></tr>";
				
				echo "<tr><td class='b'>Фамилия:</td>
					<td class=''>".$row['Surname']."</td></tr>";
				
				echo "<tr><td class='b'>Имя:</td>
					<td class=''>".$row['Name']."</td></tr>";
				
				echo "<tr><td class='b'>Отчество:</td>
					<td class=''>".$row['Patronymic']."</td></tr>";
				
				echo "<tr><td class='b'>Дата рождения:</td>
					<td class=''>".$row['Date_of_birth']."</td></tr>";
				
				echo "<tr><td class='b'>Пол:</td>
					<td class=''>".$Gender."</td></tr>";
				
				echo "<tr><td class='b'>Номер СНИЛС:</td>
					<td class=''>".$row['Insurance']."</td></tr>";
				
				echo "<tr><td class='b'>Гражданство:</td>
					<td class=''>".$row['Nationality']."</td></tr>";
				
				echo "<tr><td class='b'>Номер паспорта:</td>
					<td class=''>".$row['Passport']."</td></tr>";
				
				echo "<tr><td class='b'>Почтовый индекс:</td>
					<td class=''>".$row['Zip_code']."</td></tr>";
				
				echo "<tr><td class='b'>Адрес:</td>
					<td class=''>".$row['Adress']."</td></tr>";
				
				echo "<tr><td class='b'>Трудовой стаж:</td>
					<td class=''>".$row['Seniority']."</td></tr>";
				
				echo "<tr><td class='b'>Отчисления:</td>
					<td class=''>".$row['Allocations']."</td></tr>";
				
				echo "<tr><td class='b'>Пенсия:</td>
					<td class=''>".drawCheck($row['Pension'])."</td></tr>";
				
				echo "<tr><td class='b'>ЕДВ:</td>
					<td class=''>".drawCheck($row['EDV'])."</td></tr>";
				
				echo "<tr><td class='b'>ДМО:</td>
					<td class=''>".drawCheck($row['DMO'])."</td></tr>";
				
				echo "<tr><td class='b'>ДЕМО:</td>
					<td class=''>".drawCheck($row['DEMO'])."</td></tr>";
				
				echo "<tr><td class='b'>Выплата героям:</td>
					<td class=''>".drawCheck($row['Payment_to_heroes'])."</td></tr>";
				
				echo "<tr><td class='b'>ФСД:</td>
					<td class=''>".drawCheck($row['FSD'])."</td></tr>";
				
				echo "<tr><td class='b'>Неработоспособный член семьи:</td>
					<td class=''>".drawCheck($row['Disabled_family_member'])."</td></tr>";
				
				echo "<tr><td class='b'>Истец:</td>
					<td class=''>".drawCheck($row['Plaintiff'])."</td></tr>";
				
				echo "<tr><td class='b'>Умерший кормилец:</td>
					<td class=''>".drawCheck($row['Deceased_breadwinner'])."</td></tr>";
				
				echo "<tr><td class='b'>Опекун:</td>
					<td class=''>".drawCheck($row['Guardian'])."</td></tr>";
				
				echo "<tr><td class='b'>Персона обеспечивающая уход:</td>
					<td class=''>".drawCheck($row['Person_providing_care'])."</td></tr>";
				
				echo "<tr><td class='b'>Жизнь или работа в зоне радиации:</td>
					<td class=''>".drawCheck($row['Radiation'])."</td></tr>";

			}
		?>
		</table>
	</div>
</div>