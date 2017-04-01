<?php
$message = $_REQUEST['dataInput'];

function back($backWards){
    $length = strlen($backWards);
    $newMessage = "";
    for($i=$length; $i>=0; $i--){
        $newMessage .= $backWards[$i];
    }
    echo $newMessage;
}
back($message);
?>