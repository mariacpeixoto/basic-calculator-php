<?php
eval('$total = '.$_GET['resultado'].';');
header("Location: calculadora.php?total=" . $total );
?>