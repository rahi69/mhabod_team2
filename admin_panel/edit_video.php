<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ویرایش ویدئو</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<style>
    .containerrrrr form{
        font-weight: bold;
        font-family: IRANSans;
        direction: rtl;
        text-align: right;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        margin: 10%;
    }
    /*body{*/
        /*background-image: url("img/BackgroundHome.jpg");*/
    /*}*/

</style>
<body>
<?php
    $id = $function->escape_string($_GET['edit_video']);
    $query = $function->query("SELECT * FROM tbl_video WHERE id_video = '{$id}' ");
    $function->confirm($query);
    $result = $function->fetch_array($query);

    if (isset($_POST['update_video'])) {
        $title = $function->escape_string($_POST['title']);
        $price = $function->escape_string($_POST['price']);
        $description = $function->escape_string($_POST['description']);
        $video = $function->escape_string($_POST['video']);
        $status = $function->escape_string($_POST['status']);

        $query = $function->query("UPDATE tbl_video SET title = '{$title}', decription = '{$description}', price = '{$price}' , 
                                          status = '{$status}' , video = '{$video}' WHERE id_video = '{$id}'");
        if ($query) {
            $function->redirect("index.php");
        }
    }
?>
<div class="containerrrrr">
    <form action="" method="post">
        <br/>
        <div class="form-group">
            <label> عنوان:</label>
            <input type="text" class="form-control"  name="title" value="<?php echo $result['title'];?>">
        </div>
        <div class="form-group">
            <label>قیمت:</label>
            <input type="text" class="form-control"  name="price" value="<?php echo $result['price'];?>">
        </div>

        <div class="form-group">
            <label for="comment">توضیحات:</label>
            <textarea class="form-control" rows="5" id="comment" name="description"><?php echo $result['description'];?></textarea>
        </div>
        <label for="video">انتخاب ویدئو</label>
        <input style="direction: rtl;width: 100%" type="file" id="myFile" name="video" value="<?php echo $result['video'];?>" ><br/>
        <!--        <script>-->
        <!--            function myFunction() {-->
        <!--                var x = document.getElementById("myFile");-->
        <!--                x.disabled = true;-->
        <!--            }-->
        <!--        </script>-->

        <div style="direction: rtl;width: 100%" class="checkbox">
            <label><input type="checkbox" name="status" value="<?php echo $result['status']?>">&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
        </div>
        <div style="direction: rtl;width: 100%">
            <button style="direction: rtl" type="submit" class="btn btn-danger" name="update_video">ویرایش</button>
        </div>
    </form>
</div>
</body>
</html>