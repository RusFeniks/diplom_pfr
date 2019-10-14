<? if (!$_PATH_) {
	header ("Location: /404.php");
}

	function autorizeCheck()
	{
		if ($login = $_POST["Login"] and $password = md5(md5($_POST["Password"]))) {
			if ($result = mysqli_fetch_array(accessToDataBase("SELECT id FROM Users WHERE login = '$login' and password = '$password'"))) {
				$hash = md5(date('m/d/Y h:i:s a', time()));
				$ip = $_SERVER['REMOTE_ADDR'];
				$id = $result['id'];
				if (accessToDataBase("UPDATE Users SET hash = '$hash', ip = '$ip' WHERE id = '$id'")) {
					setcookie("id", $id);
					setcookie("hash", $hash);
					return true;
				}
			}
		} elseif ($id = $_COOKIE["id"] and $hash = $_COOKIE["hash"]) {
			if ($result = mysqli_fetch_array(accessToDataBase("SELECT hash,ip FROM Users WHERE id = '$id'"))) {
				if ($hash == $result['hash'] and $_SERVER['REMOTE_ADDR'] == $result['ip']) {
					return true;
				}
			}
		}
		return false;
	}

	function emergence()
	{
		setcookie("id","",time()-1);
		setcookie("hash","",time()-1);
		header ("Location: /");
	}
?>