<?php
session_start();
$_SESSION["name"]="ram";
session_destroy();
echo $_SESSION["name"];
?>
