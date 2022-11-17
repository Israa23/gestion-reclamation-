
<?php
include 'rdvC.php';
$rdvC= new rdvC();
$rdvC->deleterdv($_GET["id"]);
header('Location:listerdv.php');
?>
