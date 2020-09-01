<?php
session_start();
$servername = "localhost";
$username = "maveli";
$password = "maveli";
$dbname = "ONAMHUNT";
$flag = 0;
$conn = new mysqli($servername, $username, $password, $dbname);
if (!$conn) {
    echo "failed";
}
$answers = array("problem1" => "thrissur", "problem2" => "angamali");
if($_GET["answer"] == $answers[$_GET["task"]]){
    $team_name = $_SESSION["team_name"];
    $team_code = $_SESSION["team_code"];
    $sql = 'SELECT * FROM scoreboard WHERE team_code = "' . $team_code . '" AND ' . $_GET["task"] . ' IS NULL';
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $flag = 1;
        mysqli_close($conn);
        $conn = new mysqli($servername, $username, $password, $dbname);
    }
    if($flag == 1){
        $sql = "UPDATE scoreboard SET " . $_GET["task"] . " = SYSDATE() WHERE team_code = '" . $team_code . "'";
        $result = mysqli_query($conn, $sql);
        header("Location: game.php?attempt=pass");
    }
}else{
    header("Location: game.php?attempt=fail");
}
mysqli_close($conn);
?>