<?php 
session_start();

$_SESSION["name"] = 34;
$_SESSION["id"] = 32;


echo "session are set.<br>";
?>

<?php  
    echo  $_SESSION["name"].'<br>';
    echo  $_SESSION["id"].'<br>';
    
//Destory the session variable.
    session_unset();
    session_destroy();

?>