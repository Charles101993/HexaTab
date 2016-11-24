<?php

$cid = $_GET['slider_val'];

session_start();
echo "{$_SESSION['username']}";
if(isset($_SESSION['username'])){
	$user = $_SESSION['username'];
	require_once '../login.php';
	$db_server = @mysqli_connect($db_hostname, $db_username, $db_password);
		if (!$db_server) die("Unable to connect to mySQL:" . mysqli_error($db_server));
	mysqli_select_db($db_server, $db_database)
		or die("Unable to connect to database" . mysqli_error($db_server));
	
	$parse_str = explode(",",$cid);

	
	for($i = 0; $i < count($parse_str); $i++){
		$x = $parse_str[$i];
		$i += 1;
		$y = $parse_str[$i];
		$i += 1;
		$url = $parse_str[$i];
		$i += 1;
		$open = $parse_str[$i];
		$i += 1;
		$username = $parse_str[$i];
		$i += 1;
		$label = $parse_str[$i];
		if($i == 5){
			$query = "DELETE FROM `flakes` WHERE user = '$username'";
			$result1 = mysqli_query($db_server, $query);
		}
		$query = "INSERT INTO `flakes`(`x`, `y`, `url`, `is_open`, `user`, `label`) VALUES ($x, $y,'$url', $open, '$username', '$label')";
		$result = mysqli_query($db_server, $query);
	}
	echo $x . ' ' . $x . ' ' . $y . ' ' . $url . ' ' . $username;

}

?>
