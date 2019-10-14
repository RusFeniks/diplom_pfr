<?
	function accessToDataBase($sql_request='')
	{
		if ($sql_request != "" and $sql_request != null) {
			global $db_server, $db_user, $db_password, $db_name;
			if ($connection = mysqli_connect($db_server, $db_user, $db_password)) {
				if (mysqli_select_db($connection, $db_name)) {
					if ($result = mysqli_query($connection, $sql_request)) {
						mysqli_close($connection);
						return $result;
					}
				}
				mysqli_close($connection);
			} else { echo "Произошла ошибка при подключении к базе данных."; }
		}
		return false;
	}


	function getValue($name = '', $alternative = '')
	{
		if ($_POST[$name] != null and $_POST[$name] != '') {
			echo $_POST[$name];
		} else { echo $alternative;}
	}


	function getSelected($name = '')
	{
		if ($_POST[$name] == "on" or $_POST[$name] == "true") {
			echo "checked";
		}
	}


	function checkRights($rights = null)
	{
		if (gettype($rights) == "array") {
			$ret = true;
			for ($j = 0; $j < count($rights); $j++) {
				if(gettype($rights[$j]) == "integer") {
					$r = false;
					if($result = mysqli_fetch_array(accessToDataBase("SELECT rights FROM users WHERE id = '" . $_COOKIE["id"] . "'"))) {
						$rights_array = json_decode($result['rights']);
						for($i = 0; $i < count($rights_array); $i++) {
							if ($rights[$j] == $rights_array[$i]) { $r = true; }
						}
					}
					if ($ret and $r) { $ret = true; }
						else { $ret = false; }
				}
			}
			return $ret;
		} elseif (gettype($rights) == "integer") {
			if($result = mysqli_fetch_array(accessToDataBase("SELECT rights FROM users WHERE id = '" . $_COOKIE["id"] . "'"))) {
				$rights_array = json_decode($result['rights']);
				for($i = 0; $i < count($rights_array); $i++) {
					if ($rights == $rights_array[$i]) { return true; }
				}
				return false;
			}
		} else { return false; }
	}


	function searchGen($method = null) {
		if (!$method) { $method = $_POST; }
		$string = true;
		$t = true;
		if ($result = accessToDataBase("DESCRIBE pension_affairs")) {
			while ($row = mysqli_fetch_row($result)) {
				if ($method[$row[0]]) {
					if ($t) { $t = false; $string = ""; } else { $string = $string . ", "; }
					$string = $string . $row[0] . " = " . "'" . $method[$row[0]] . "'";
				}
			}
		}
		return $string;
	}

	function addURL($vars = null, $url = null) {
		
		if ($vars and gettype($vars) == "array") {
			$massive = $_GET;
			foreach ($vars as $key => $value) {
				$massive[$key] = $value;
			}
			if (count($massive) > 0) {
				if (!$url) { $url = parse_url($_PATH_)['path']; }
				$i = true;
				foreach ($massive as $name => $val) {
					if ($val and $val != "") {
						if ($i) { $url = $url."/?"; $i = false; } else { $url = $url."&"; }
						$url = $url.$name."=".$val;
					}
				}
				echo $url;
			}
		}
		return null;
	}

	function postString($name = null) {
		if ($name) {
			if ($_POST[$name]) { return "'".$_POST[$name]."'"; }
			else { return "''"; }
		}
	}
	function postInt($name = null) {
		if ($name) {
			if ($_POST[$name]) { return $_POST[$name]; }
			else { return 0; }
		}
	}
	function postCheck($name = null) {
		if ($name) {
			if ($_POST[$name] and ($_POST[$name] == "1" or $_POST[$name] == "true" or $_POST[$name] == 1 or $_POST[$name] == true)) { return 1; }
			else { return 0; }
		}
	}

	function drawCheck($value=null)
	{
		if ($value and ($value == 1 or $value == true or $value == "1" or $value == "true")) {
			return '<img class="checker-icon" src="img/checked.png">';
		} else {
			return '<img class="checker-icon" src="img/notchecked.png">';
		}
	}

?>