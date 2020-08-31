<?php
session_start();
$servername = "localhost";
$username = "maveli";
$password = "maveli";
$dbname = "ONAMHUNT";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	echo "failed";
}
$team_name = $_GET["team_name"];
$team_code = $_GET["team_code"];
$validator = "/^[A-Za-z0-9]+$/";
if ($team_code == "" || $team_name == ""){
	header("Location: index.php?auth=fail");
}
if (preg_match($validator, $team_name) && preg_match($validator, $team_code)){
    $sql = "SELECT * FROM team_details WHERE team_name = '" . $team_name . "' AND team_code = '" . $team_code . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
		$_SESSION["team_name"] = $team_name;
		$_SESSION["team_code"] = $team_code;
        header("Location: game.php");
    } else {
        header("Location: index.php?auth=fail");
    }
}
mysqli_close($conn);
?>