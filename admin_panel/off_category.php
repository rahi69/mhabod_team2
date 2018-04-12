<?php
$function = new functions();
$id = $function->escape_string($_GET['off_cat']);
$status = 0;
$sql = "UPDATE `tbl_category` SET `status`= '$status' WHERE id_category= '{$id}'";
$result = $function->query($sql);
$function->confirm($result);
$function->redirect("M.Education.php");