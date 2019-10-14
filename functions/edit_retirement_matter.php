<?
	include '../settings.php';
	include 'functions.php';
	
	$array = [
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

	$string = "";
	$i = true;

	foreach ($array as $key => $value) {
		if(!$i) {
			$string = $string.", ";
		} else { $i = false; }
		$string = $string.$key."=".$value;
	}

	$request = "UPDATE pension_affairs SET $string WHERE ID=".$_POST['ID'];
	if (accessToDataBase($request)) {
		header("Location: /");
	} else {
		echo "Произошли неполадки при выполнении запроса.<br>";
		echo $request;
	}
?>