<div class="row">
	<div class="four columns">		
		<label for="ID">Id</label>
		<input class="u-full-width" type="text" name="ID" id="ID" placeholder="ID" value="<? echo $row['ID'] ?>" pattern="[.]{,10}">
	</div>
</div>
<div class="row">
	<div class="four columns">		
		<label for="Surname">Фамилия</label>
		<input class="u-full-width" type="text" name="Surname" id="Surname" placeholder="Фамилия" value="<? echo $row['Surname'] ?>" pattern="[.]{,75}">
	</div>
	<div class="four columns">		
		<label for="Name">Имя</label>
		<input class="u-full-width" type="text" name="Name" id="Name" placeholder="Имя" value="<? echo $row['Name'] ?>" pattern="[.]{,75}">
	</div>
	<div class="four columns">		
		<label for="Patronymic">Отчество</label>
		<input class="u-full-width" type="text" name="Patronymic" id="Patronymic" placeholder="Отчество" value="<? echo $row['Patronymic'] ?>" pattern="[.]{,75}">
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Date_of_birth">Дата рождения</label>
		<input class="u-full-width" type="date" name="Date_of_birth" id="Date_of_birth" value="<? echo $row['Date_of_birth'] ?>">
	</div>
	<div class="four columns">		
		<label for="Gender">Пол</label>
		<select class="u-full-width" name="Gender" id="Gender">
			<option value="2" <? if($row['Gender'] == 2) { echo "selected"; } ?>>Мужчина</option>
			<option value="1"  <? if($row['Gender'] == 1) { echo "selected"; } ?>>Женщина</option>
		</select>
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Nationality">Гражданство</label>
		<input class="u-full-width" type="text" name="Nationality" id="Nationality" value="<? echo $row['Nationality'] ?>" placeholder="Гражданство" pattern="[.]{,75}">
	</div>
	<div class="four columns">		
		<label for="Passport">Серия и номер паспорта</label>
		<input class="u-full-width" type="text" name="Passport" id="Passport" value="<? echo $row['Passport'] ?>" placeholder="0000000000" pattern="[0-9]{10}">
	</div>
	<div class="four columns">		
		<label for="Insurance">Номер СНИЛС</label>
		<input class="u-full-width" type="text" name="Insurance" id="Insurance" value="<? echo $row['Insurance'] ?>" placeholder="00000000000" pattern="[0-9]{11}">
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Zip_code">Почтовый индекс</label>
		<input class="u-full-width" type="text" name="Zip_code" id="Zip_code" value="<? echo $row['Zip_code'] ?>" placeholder="000000" pattern="[0-9]{6}">
	</div>
	<div class="eight columns">		
		<label for="Adress">Адрес</label>
		<input class="u-full-width" type="text" name="Adress" id="Adress" value="<? echo $row['Adress'] ?>">
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Seniority">Трудовой стаж</label>
		<input class="u-full-width" type="text" name="Seniority" id="Seniority" value="<? echo $row['Seniority'] ?>" pattern="[0-9]{,3}">
	</div>
	<div class="four columns">
		<label for="Allocations">Отчисления</label>
		<input class="u-full-width" type="text" name="Allocations" id="Allocations" value="<? echo $row['Allocations'] ?>" pattern="[0-9\.]{,255}">
	</div>
</div>

<br>

<div class="row">
	<div class="three columns">		
		<label for="Pension"><input type="checkbox" name="Pension" id="Pension" <? if($row['Pension'] == 1) { echo "checked"; } ?> value="1"> Пенсия</label>
	</div>
	<div class="three columns">		
		<label for="EDV"><input type="checkbox" name="EDV" id="EDV" <? if($row['EDV'] == 1) { echo "checked"; } ?> value="1"> ЕДВ</label>
	</div>
	<div class="three columns">		
		<label for="DMO"><input type="checkbox" name="DMO" id="DMO" <? if($row['DMO'] == 1) { echo "checked"; } ?> value="1"> ДМО</label>
	</div>
	<div class="three columns">		
		<label for="DEMO"><input type="checkbox" name="DEMO" id="DEMO" <? if($row['DEMO'] == 1) { echo "checked"; } ?> value="1"> ДЕМО</label>
	</div>
</div>

<div class="row">
	<div class="three columns">		
		<label for="Payment_to_heroes"><input type="checkbox" name="Payment_to_heroes" id="Payment_to_heroes" <? if($row['Payment_to_heroes'] == 1) { echo "checked"; } ?> value="1"> Герои</label>
	</div>
	<div class="three columns">		
		<label for="FSD"><input type="checkbox" name="FSD" id="FSD" <? if($row['FSD'] == 1) { echo "checked"; } ?> value="1"> ФСД</label>
	</div>
	<div class="three columns">		
		<label for="Disabled_family_member"><input type="checkbox" name="Disabled_family_member" id="Disabled_family_member" <? if($row['Disabled_family_member'] == 1) { echo "checked"; } ?> value="1"> НЧС</label>
	</div>
	<div class="three columns">		
		<label for="Plaintiff"><input type="checkbox" name="Plaintiff" id="Plaintiff" <? if($row['Plaintiff'] == 1) { echo "checked"; } ?> value="1"> Истец</label>
	</div>
</div>

<div class="row">
	<div class="three columns">		
		<label for="Deceased_breadwinner"><input type="checkbox" name="Deceased_breadwinner" id="Deceased_breadwinner" <? if($row['Deceased_breadwinner'] == 1) { echo "checked"; } ?> value="1"> Смерть кормильца</label>
	</div>
	<div class="three columns">		
		<label for="Guardian"><input type="checkbox" name="Guardian" id="Guardian" <? if($row['Guardian'] == 1) { echo "checked"; } ?> value="1"> Опекун</label>
	</div>
	<div class="three columns">		
		<label for="Person_providing_care"><input type="checkbox" name="Person_providing_care" id="Person_providing_care" <? if($row['Person_providing_care'] == 1) { echo "checked"; } ?> value="1"> Персона уход</label>
	</div>
	<div class="three columns">		
		<label for="Radiation"><input type="checkbox" name="Radiation" id="Radiation" <? if($row['Radiation'] == 1) { echo "checked"; } ?> value="1"> РАД</label>
	</div>
</div>
<hr>
<div class="row">
	<div class="six columns">		
		<label for="Status">Статус дела</label>
		<select class="u-full-width" name="Status" id="Status">
			<option value="1" <? if($row['Status'] == 1) { echo "selected"; } ?>>Открыто</option>
			<option value="2" <? if($row['Status'] == 2) { echo "selected"; } ?>>Утверждено</option>
			<option value="3" <? if($row['Status'] == 3) { echo "selected"; } ?>>Закрыто</option>
		</select>
	</div>
	<div class="six columns">		
		<label for="Status">Сопртировать по</label>
		<select class="u-full-width" name="OrderBY" id="OrderBY">
			<option value="0" <? if($row['OrderBY'] == 0) { echo "selected"; } ?>>ID</option>
			<option value="1" <? if($row['OrderBY'] == 1) { echo "selected"; } ?>>Имя</option>
			<option value="2" <? if($row['OrderBY'] == 2) { echo "selected"; } ?>>Фамилия</option>
		</select>
	</div>
</div>