<?php include '../resources/config.php' ?>
<!doctype html>
<html lang="en">
<meta charset="UTF-8">
<title>ویرایش مقالات</title>
<head>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<style>
    .container form{
        font-weight: bold;
        font-family: IRANSans;
        direction: rtl;
        text-align: right;
    }
    body{
        background-image: url("img/BackgroundHome.jpg");
    }

    form{
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        direction: rtl;
        font-family: IRANSans;
        font-weight: bold;
        margin: 10%;
    }
</style>
<body>
<div class="container">

    <form action="">
        <br/>
        <div class="form-group">
            <label>نام مقاله:</label>
            <input type="text" class="form-control" placeholder="نام مقاله" name="title">
        </div>
        <div class="form-group">
            <label>توضیحات کوتاه:</label>
            <input type="text" class="form-control" placeholder="توضیحات" name="description">
        </div>

        <div class="form-group">
            <label for="comment">متن مقاله:</label>
            <textarea class="form-control" rows="5" id="comment"></textarea>
        </div>

        <input style="direction: rtl;width: 100%" type="file" id="myFile">
<!--        <script>-->
<!--            function myFunction() {-->
<!--                var x = document.getElementById("myFile");-->
<!--                x.disabled = true;-->
<!--            }-->
<!--        </script>-->
        <div style="direction: rtl;width: 100%" class="checkbox">
            <label><input type="checkbox" name="remember">&nbsp;&nbsp;&nbsp;&nbsp; فعال</label>&nbsp;&nbsp;
        </div>
        <div style="direction: rtl;width: 100%">
            <button style="direction: rtl" type="submit" class="btn btn-danger">ویرایش</button>
        </div>
    </form>



</div>
</body>
</html>





<!--<head>-->
<!--    <meta charset="UTF-8">-->
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

