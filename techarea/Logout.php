<?php
session_start();
session_destroy();
header("Location: Login_Tecnico.php");
exit;
?>
