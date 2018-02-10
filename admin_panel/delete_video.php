<?php
$function=new functions();
$id=$_GET['delete_video'];
$function->escape_string($id);
$query=$function->query("DELETE FROM tbl_video WHERE id_video = '{$id}'");
$function->confirm($query);
$function->redirect("Managment-Education.php");