<?php require_once '../resources/config.php'; ?>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>افزودن مقالات</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/add_article.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<body>

<form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

    <br/>
    <div class="form-group">
        <label>نام مقاله:</label>
        <input type="text" class="form-control" placeholder="نام مقاله" name="title">
    </div>
    <div class="form-group">
        <label>توضیحات کوتاه:</label>
        <input type="text" class="form-control" placeholder="توضیحات" name="short_desc">
    </div>

    <div class="form-group">
        <label for="description">متن مقاله:</label>
        <textarea class="form-control" rows="5" name="description" id="comment"></textarea>
    </div>

    <input style="direction: rtl;width: 100%" type="file" id="myFile" name="file">

    <div style="direction: rtl;width: 100%" class="checkbox">
        <label><input type="checkbox" name="status" checked>&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
    </div>
    <div>
        <button style="direction: rtl" type="submit" name="Add" class="btn btn-danger">ثبت</button>
        <?php
        $function->add_article();
        ?>
    </div>
</form>


</body>
