<?php
$function = new functions();
$id = $_GET['delete_gallery'];
$function->escape_string($id);

$sql = "DELETE FROM tblgallery WHERE id_gallery= '{$id}'";
$result=$function->query($sql);
$function->confirm($result);
$function->redirect("Managmant-Gallery.php");