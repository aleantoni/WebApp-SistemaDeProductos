<?php
session_start();
session_destroy();
header("Location: Login_Trabajador_de_Area.php");
exit;
?>
