<?php
$function = new functions();
$id = $_GET['delete_article'];
$function->escape_string($id);

$sql = "DELETE FROM tbl_article WHERE id_article= '{$id}'";
$result=$function->query($sql);
$function->confirm($result);



