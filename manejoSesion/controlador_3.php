<?php
session_start();
$_SESSION["nombre"] = "Gabriel";
echo $_SESSION["nombre"];
echo "<br>" . "id de session " . session_id();

?>