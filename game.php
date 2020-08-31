<?php
    if(session_status()){
        #header("Location: index.php");
        echo $_SESSION["team_name"];
    }
?>
