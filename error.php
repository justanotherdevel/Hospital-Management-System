<?php
require("include/dbinfo.php");
$link=mysqli_connect($server,$user,$pass, $db)or die(errorReport(mysqli_error()));
mysqli_select_db($link, $db)or die(errorReport(mysqli_error()));
mysqli_query($link, "delete from Session");
?>
