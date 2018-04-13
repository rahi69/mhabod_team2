<?php require_once '../resources/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>addGallery</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/add_gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
        <label>عنوان:</label>
        <input type="text" class="form-control" id="title" name="ga_title"
               placeholder="عنوان">
    </div>
    <br/>
    <label>انتخاب فایل مربوطه </label>

    <br/>
    <div class="checkbox">
        <label><input type="radio" name="ga_remember" value="picture" <?php if(isset($ga_remember) && $ga_remember=="picture") echo "checked"; ?> >&nbsp;&nbsp;&nbsp;&nbsp; عکس</label>&nbsp;&nbsp;
    </div>
    <div class="checkbox">
        <label><input type="radio" name="ga_remember" value="video" <?php  if(isset($ga_remember) && $ga_remember=="video") echo "checked"; ?> >&nbsp;&nbsp;&nbsp;&nbsp; ویدئو</label>&nbsp;&nbsp;
    </div><br/>

    <input name="file" style="direction: rtl;width: 50%" type="file" ><br>
<!--    <input name="prev_file" style="direction: rtl;width: 50%;" type="file" ><br>-->
<!--    if(isset($ga_remember) && $ga_remember=="video") echo 'display: none'; else echo 'display: block'; -->
    <div style="direction: rtl;width: 100%" class="checkbox">
        <label><input type="checkbox" name="ga_status" checked >&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
    </div>
    <button type="submit" name="ga_add" class="btn btn-danger"> ثبت </button>
    <button type="submit" name="ga_add" class="btn btn-danger"> انصراف </button>
    <?php $function->add_gallery();?>
</form>
</body>
</html>