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
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <div class="form-group">
        <label>عنوان:</label>
        <input type="text" class="form-control" id="title"
               placeholder="عنوان">
    </div>
    <br/>
    <label>انتخاب عکس</label>
    <input style="direction: rtl;width: 50%" type="file" >
    <br/>
    <label>انتخاب ویدئو</label>
    <input style="direction: rtl;width: 50%" type="file" >
    <br/>
    <div class="checkbox">
        <label><input type="radio" name="remember">&nbsp;&nbsp;&nbsp;&nbsp; عکس</label>&nbsp;&nbsp;
    </div>
    <div class="checkbox">
        <label><input type="radio" name="remember">&nbsp;&nbsp;&nbsp;&nbsp; ویدئو</label>&nbsp;&nbsp;
    </div><br/>
    <button type="submit" class="btn btn-danger">ثبت</button>
</form>
</body>
</html>