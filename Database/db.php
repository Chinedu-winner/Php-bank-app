<?php
if($database){
    echo 'conected';
}else {
    echo 'Not connected';
    displayError("Database not connect"); 
}

?>
