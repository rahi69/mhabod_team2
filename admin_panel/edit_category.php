<?php
$function = new functions();
$id = $function->escape_string($_GET['edit_cat']);
$edit_cat_name = $function->escape_string($_GET['edit_cat_name']);

$sql = "UPDATE `tbl_category` SET `name_category`= '{$edit_cat_name}' WHERE id_category= '{$id}'";
$result = $function->query($sql);
$function->confirm($result);
$function->redirect("M.Education.php");