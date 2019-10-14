<?	if (!$_PATH_) {
	header ("Location: /404.php");
}

	if ($logged) {
		switch ($_PAGE_) {
			case 'add':
				include 'pages/add.php';
				break;
			
			case 'view':
				include 'pages/view.php';
				break;
			
			case 'edit':
				include 'pages/edit.php';
				break;
			
			case 'delete':
				include 'pages/delete.php';
				break;

			case 'search':
				include 'pages/find.php';
				break;

			case 'clear':
				include 'pages/clear.php';
				break;
			
			default:
				include 'pages/default.php';
				break;
		}
	} else {
		include 'pages/login.php';
	}

?>