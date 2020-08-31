<?php
$servername = "localhost";
$username = "maveli";
$password = "maveli";
$dbname = "ONAMHUNT";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$team_name = $_REQUEST["team_name"];
$team_code = $_REQUEST["team_code"];
$sql = "SELECT * FROM team_details WHERE team_name = '" . $team_name . "' AND team_code = '" . $team_code . "'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
	echo "1";
} else {
	#setcookie("team_name", $team_name);
	#setcookie("team_code", $team_code);
	echo "0";
}
mysqli_close($conn);
?>