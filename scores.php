<?php
$servername = "localhost";
$username = "maveli";
$password = "maveli";
$dbname = "ONAMHUNT";
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "failed";
}
$sql = 'INSERT INTO team_details VALUES ("' . $_GET["team_code"] . '", "' . $_GET["team_name"] . '", ' . $_GET["members"] . ', NULL, NULL);';
$sql .= 'INSERT INTO scoreboard VALUES ("' . $_GET["team_code"] . '", NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL)';
$result = mysqli_multi_query($conn, $sql);
mysqli_close();
?>