<?php require_once '../resources/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>addGallery</title>
    <link href="Content/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/add_gallery.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="jquery-3.3.1.min.js"></script>
</head>
<body>
<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <!--    Name-->
    <div class="form-group">
        <label>عنوان:</label>
        <input type="text" class="form-control" id="title" name="ga_title"
               placeholder="عنوان">
    </div>
    <br/>

    <label>انتخاب فایل مربوطه </label>
    <br/>
    <!--    radioImage-->
    <div onclick="myFunction" class="checkbox">
        <label><input type="radio" name="ga_remember" value="picture"
                <?php if (isset($ga_remember) && $ga_remember == "picture") echo "checked"; ?> > عکس</label>&nbsp;&nbsp;
    </div>
    <!--    radioVideo-->
    <div class="checkbox">
        <label><input type="radio" name="ga_remember" value="video"
                <?php if (isset($ga_remember) && $ga_remember == "video") echo "checked"; ?> > ویدئو</label>&nbsp;&nbsp;
    </div>
    <br/>
    <!--    BrowseButton-->
    <input type="file" class="group" name="file" >
    <br>
    <!--    BrowseButton-->
    <input type="file" class="group" name="prev_file">
    <br>

    <div style="direction: rtl;width: 100%" class="checkbox">
        <label><input type="checkbox" name="ga_status" checked>&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
    </div>


    <button type="submit" name="ga_add" class="btn btn-danger"> ثبت</button>
    <button type="submit" name="ga_add" class="btn btn-danger"> انصراف</button>
    <?php $function->add_gallery(); ?>
</form>
</body>
</html>
<script>
    $("input:file").prop("disabled", true);

    $("input:radio").on("click", function() {
        $("input:file").prop("disabled", true);
        $("input.group" + $(this).val()).prop("disabled", false);
    });
</script>

<!--<script>-->
<!--    function myFunction() {-->
<!--        document.getElementsByClassName("group").disabled = false;-->
<!--    }-->
<!--</script>-->