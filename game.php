<?php
    if(session_status()){
        #header("Location: index.php");
        echo session_id();
    }
?>
