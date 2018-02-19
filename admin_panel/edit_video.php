<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ویرایش ویدئو</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link href="css/edit_video.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
<?php
$result=$function->edit_video();
?>
<div class="containerrrrr">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
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

        <div class="form-group">
            <label for="image">انتخاب عکس</label>
            <input type="file" name="image" value="<?php echo $result['image_prev'];?>">

        </div>
        <div style="direction: rtl;width: 100%" class="checkbox">
            <label><input type="checkbox" name="status"<?php if( $result['status'] ==1 ){ ?> <?php echo 'checked' ;} ?> >">&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
        </div>
        <div style="direction: rtl;width: 100%">
            <button style="direction: rtl" type="submit" class="btn btn-danger" name="update_video">ویرایش</button>
            <input type="hidden" name="id" value="<?php echo $result['id_video'];?> >

        </div>
    </form>
    <?php
            //$function=new functions();
            $ResponseUpdate =$function->UpdateVideoById();
            if ($ResponseUpdate == true) {
                echo "<script> alert('Success');</script>";
            } ?>
</div>
</body>
</html>

  <!--<head>-->
<!--    <meta charset="UTF-8">
            <!--    <meta name="viewport"-->
            <!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
            <!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
            <!--    <title>Edit Article</title>-->
            <!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
            <!---->
            <!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
            <!---->
            <!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
            <!--    <nav class="navbar navbar-inverse">-->
            <!---->
            <!--        <div class="container-fluid">-->
            <!---->
            <!--            <div class="navbar-header">-->
            <!---->
            <!--                <a class="navbar-brand" href="index.php" style="color: red">Home</a>-->
            <!---->
            <!--            </div>-->
            <!--        </div>-->
            <!--    </nav>-->
            <!--</head>-->