<div class="row">
	<div class="four columns">		
		<label for="Surname">Фамилия</label>
		<input class="u-full-width" type="text" name="Surname" id="Surname" placeholder="Фамилия" pattern="[.]{,75}" required>
	</div>
	<div class="four columns">		
		<label for="Name">Имя</label>
		<input class="u-full-width" type="text" name="Name" id="Name" placeholder="Имя" pattern="[.]{,75}" required>
	</div>
	<div class="four columns">		
		<label for="Patronymic">Отчество</label>
		<input class="u-full-width" type="text" name="Patronymic" id="Patronymic" placeholder="Отчество" pattern="[.]{,75}" required>
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Date_of_birth">Дата рождения</label>
		<input class="u-full-width" type="date" name="Date_of_birth" id="Date_of_birth" value="1990-01-01">
	</div>
	<div class="four columns">		
		<label for="Gender">Пол</label>
		<select class="u-full-width" name="Gender" id="Gender">
			<option value="2">Мужчина</option>
			<option value="1">Женщина</option>
		</select>
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Nationality">Гражданство</label>
		<input class="u-full-width" type="text" name="Nationality" id="Nationality" placeholder="Гражданство" pattern="[.]{,75}">
	</div>
	<div class="four columns">		
		<label for="Passport">Серия и номер паспорта</label>
		<input class="u-full-width" type="text" name="Passport" id="Passport" placeholder="0000000000" pattern="[0-9]{10}">
	</div>
	<div class="four columns">		
		<label for="Insurance">Номер СНИЛС</label>
		<input class="u-full-width" type="text" name="Insurance" id="Insurance" placeholder="00000000000" pattern="[0-9]{11}">
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Zip_code">Почтовый индекс</label>
		<input class="u-full-width" type="text" name="Zip_code" id="Zip_code" placeholder="000000" pattern="[0-9]{6}">
	</div>
	<div class="eight columns">		
		<label for="Adress">Адрес</label>
		<input class="u-full-width" type="text" name="Adress" id="Adress">
	</div>
</div>

<div class="row">
	<div class="four columns">		
		<label for="Seniority">Трудовой стаж</label>
		<input class="u-full-width" type="text" name="Seniority" id="Seniority" pattern="[0-9]{,3}">
	</div>
	<div class="four columns">
		<label for="Allocations">Отчисления</label>
		<input class="u-full-width" type="text" name="Allocations" id="Allocations" pattern="[0-9\.]{,255}">
	</div>
</div>

<br>

<div class="row">
	<div class="three columns">		
		<label for="Pension"><input type="checkbox" name="Pension" id="Pension" value="1"> Пенсия</label>
	</div>
	<div class="three columns">		
		<label for="EDV"><input type="checkbox" name="EDV" id="EDV" value="1"> ЕДВ</label>
	</div>
	<div class="three columns">		
		<label for="DMO"><input type="checkbox" name="DMO" id="DMO" value="1"> ДМО</label>
	</div>
	<div class="three columns">		
		<label for="DEMO"><input type="checkbox" name="DEMO" id="DEMO" value="1"> ДЕМО</label>
	</div>
</div>

<div class="row">
	<div class="three columns">		
		<label for="Payment_to_heroes"><input type="checkbox" name="Payment_to_heroes" id="Payment_to_heroes" value="1"> Герои</label>
	</div>
	<div class="three columns">		
		<label for="FSD"><input type="checkbox" name="FSD" id="FSD" value="1"> ФСД</label>
	</div>
	<div class="three columns">		
		<label for="Disabled_family_member"><input type="checkbox" name="Disabled_family_member" id="Disabled_family_member" value="1"> НЧС</label>
	</div>
	<div class="three columns">		
		<label for="Plaintiff"><input type="checkbox" name="Plaintiff" id="Plaintiff" value="1"> Истец</label>
	</div>
</div>

<div class="row">
	<div class="three columns">		
		<label for="Deceased_breadwinner"><input type="checkbox" name="Deceased_breadwinner" id="Deceased_breadwinner" value="1"> Смерть кормильца</label>
	</div>
	<div class="three columns">		
		<label for="Guardian"><input type="checkbox" name="Guardian" id="Guardian" value="1"> Опекун</label>
	</div>
	<div class="three columns">		
		<label for="Person_providing_care"><input type="checkbox" name="Person_providing_care" id="Person_providing_care" value="1"> Персона уход</label>
	</div>
	<div class="three columns">		
		<label for="Radiation"><input type="checkbox" name="Radiation" id="Radiation" value="1"> РАД</label>
	</div>
</div>
<hr>
<div class="row">
	<div class="six columns">		
		<label for="Status">Статус дела</label>
		<select class="u-full-width" name="Status" id="Status">
			<option value="1">Открыто</option>
			<option value="2">Утверждено</option>
			<option value="3">Закрыто</option>
		</select>
	</div>
</div>