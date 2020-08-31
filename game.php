<?php
    if(session_status()){
        #header("Location: index.php");
        echo session_id();
    }else{
        echo session_id();
    }
?>
