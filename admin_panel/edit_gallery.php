<?php require_once '../resources/config.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ویرایش گالری</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
<!--    <link href="css/edit_gallery.css" rel="stylesheet" />-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style>
    form{
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        direction: rtl;
        font-family: IRANSans;
        font-weight: bold;
        margin: 10%;
    }
    body div{
        direction: rtl;width: 100%
    }
    body{
        background-image: url("img/BackgroundHome.jpg");
    }
</style>
<body>
<form method="post">
    <?php $result = $function->edit_gallery();?>
    <div class="form-group">
        <label>عنوان:</label>
        <input type="text" class="form-control" id="title" name="title" value="<?php echo $result['title']; ?>"placeholder="عنوان">
    </div>
    <br/>
<!--    <label>انتخاب عکس</label>-->
<!--    <input style="direction: rtl;width: 50%" type="file" >-->
<!--    <br/>-->
<!--    <label>انتخاب ویدئو</label>-->
<!--    <input style="direction: rtl;width: 50%" type="file" >-->
    <br/>
<!--    <div class="checkbox">-->
<!--        <label><input type="radio" name="remember">&nbsp;&nbsp;&nbsp;&nbsp; عکس</label>&nbsp;&nbsp;-->
<!--    </div>-->
<!--    <div class="checkbox">-->
<!--        <label><input type="radio" name="remember">&nbsp;&nbsp;&nbsp;&nbsp; ویدئو</label>&nbsp;&nbsp;-->
<!--    </div><br/>-->
    <div style="direction: rtl;width: 100%" class="checkbox">
<!--        <label><input type="checkbox" name="status"--><?php //if( $result['status'] ==1 ){ ?><!----><?php //echo 'checked' ;} ?><!--">&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;-->
   <label >فعال</label><input type="checkbox" name="status" <?php if( $result['status'] ==1)echo 'checked' ;?>">

    </div>
    <input type="hidden" name="id" value="<?php echo $result['id_gallery']?>">
    <div class="form-group">
        <button class="btn btn-danger" type="submit" name="UpdateGallery">ثبت</button>
        <?php $function->UpdateGalleryByID();?>
    </div>
</form>
</body>
</html>