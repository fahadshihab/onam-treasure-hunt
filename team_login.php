<?php
$servername = "localhost";
$username = "maveli";
$password = "maveli";
$dbname = "ONAMHUNT";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
	echo "failed";
}
$team_name = $_REQUEST["team_name"];
$team_code = $_REQUEST["team_code"];
$validator = /^[A-Za-z0-9]+$/;
/*
if (preg_match($validator, $team_name) && preg_match($validator, $team_code)){
    $sql = "SELECT * FROM team_details WHERE team_name = '" . $team_name . "' AND team_code = '" . $team_code . "'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        header("Location: game.php");
    } else {
        header("Location: index.php");
    }
}
mysqli_close($conn);
*/
?>