<?
	include '../settings.php';
	include 'functions.php';
	
	$array = [
		"ID" => "null",
		"Name" => postString("Name"),
		"Surname" => postString("Surname"),
		"Patronymic" => postString("Patronymic"),
		"Date_of_birth" => "'".$_POST["Date_of_birth"]."'",
		"Gender" => $_POST["Gender"],
		"Insurance" => postInt("Insurance"),
		"Nationality" => postString("Nationality"),
		"Passport" => postInt("Passport"),
		"Zip_code" => postInt("Zip_code"),
		"Adress" => postString("Adress"),
		"Seniority" => postInt("Seniority"),
		"Allocations" => postInt("Allocations"),
		"Pension" => postCheck("Pension"),
		"EDV" => postCheck("EDV"),
		"DMO" => postCheck("DMO"),
		"DEMO" => postCheck("DEMO"),
		"Payment_to_heroes" => postCheck("Payment_to_heroes"),
		"FSD" => postCheck("FSD"),
		"Disabled_family_member" => postCheck("Disabled_family_member"),
		"Plaintiff" => postCheck("Plaintiff"),
		"Deceased_breadwinner" => postCheck("Deceased_breadwinner"),
		"Guardian" => postCheck("Guardian"),
		"Person_providing_care" => postCheck("Person_providing_care"),
		"Radiation" => postCheck("Radiation"),
		"Status" => $_POST["Status"]
	];

	$keys = "";
	$values = "";
	$i = true;

	foreach ($array as $key => $value) {
		if(!$i) {
			$keys = $keys.", ";
			$values = $values.", ";
		} else { $i = false; }
		$keys = $keys.$key;
		$values = $values.$value;
	}

	$request = "INSERT INTO pension_affairs ($keys) VALUES ($values)";
	if (accessToDataBase($request)) {
		header("Location: /");
	} else {
		echo "Произошли неполадки при выполнении запроса.<br>";
		echo $request;
		echo $_POST["Date_of_birth"];
	}
?>