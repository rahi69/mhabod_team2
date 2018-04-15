<?php
    $function = new functions();
    $id = $_GET['delete_gallery'];
  $id = $function->escape_string($id);

    $sql = "DELETE FROM tblgallery WHERE id_gallery= '{$id}'";
    $result = $function->query($sql);
    $function->confirm($result);
    '<script>  </script>';
    $function->redirect("Managmant-Gallery.php");