<?php
session_start();
?>
<HTML>
<HEAD>
<TITLE>contador.php</TITLE>
</HEAD>
<BODY>
<?php
$contador = $_SESSION["contador"];
if (isset($contador) == false) {
  $contador=0;
}
++$contador;
$_SESSION["contador"] = $contador;
echo "<a href=\"controlador_5.php\">Has recargado esta página   $contador veces</a>";
?>
</BODY>
</HTML>