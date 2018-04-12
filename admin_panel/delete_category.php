<?php
$function = new functions();
$id = $function->escape_string($_GET['delete_cat']);

$sql = "DELETE FROM tbl_category WHERE id_category=".$id;
$result = $function->query($sql);
$function->confirm($result);
$function->redirect("manage_education.php");