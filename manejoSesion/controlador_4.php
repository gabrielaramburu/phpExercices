<HTML>
<HEAD>
<TITLE>contador.php</TITLE>
</HEAD>
<BODY>
<?php
if (isset($contador)==false) {
  $contador=0;
}
++$contador;
echo "<a href=\"controlador_4.php\">Has recargado esta página   $contador veces</a>";
?>
</BODY>
</HTML>