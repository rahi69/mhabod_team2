<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ویرایش گالری</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
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
<?php $result = $function->edit_gallery();?>
<div class="form-group">
    <label>عنوان:</label>
    <input type="text" class="form-control" id="title" name="ga_title" value="<?php echo $result['title']?>">
</div>
<br/>
<div class="form-group">
    <label>نام فایل:</label>
  <label><span><?php if(!is_null($result['image_url'])) echo$result['image_url']; else echo $result['video_url'] ;?></span></label>
</div>
<br>
<div style="direction: rtl;width: 100%" class="checkbox">
    <label><input type="checkbox" name="ga_status" checked>&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
</div>
<button type="submit" name="ga_add" class="btn btn-danger"> ثبت </button>
<input type="hidden" name="id_gallery" value="<?php echo $result['id_gallery'];?> >
</form>
</body>
</html>