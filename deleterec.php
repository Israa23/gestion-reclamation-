<?php
include 'recC.php';
$recC= new recC();
$recC->deleterec($_GET["idd"]);
header('Location:listerec.php');
?>
