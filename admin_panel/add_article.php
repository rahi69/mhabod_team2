<?php require_once '../resources/config.php'; ?>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>ویرایش مقالات</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


<style>

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

<form>
    <div class="form-group">
        <label for="email">ایمیل:</label>
        <input type="email" class="form-control" id="email"
               placeholder="وارد کردن ایمیل">
    </div>
    <div class="form-group">
        <label for="pwd">رمز عبور:</label>
        <input type="password" class="form-control" id="pwd" placeholder="وارد کردن رمز عبور">
    </div>
    <div class="form-group">
        <label for="pwd">تکرار رمز عبور:</label>
        <input type="password" class="form-control" id="Rpwd" placeholder="وارد کردن رمز عبور">
    </div>
    <input style="direction: rtl;width: 100%" type="file" id="myFile">

    <div class="checkbox">
        <label><input type="checkbox">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;فعال</label>
    </div>
    <button type="submit" class="btn btn-danger">ثبت</button>
</form>


</body>








<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->
<!---->
<!--<div class="col-md-12">-->
<!---->
<!--    <div class="row">-->
<!--        <h1 class="page-header">-->
<!--            Add article-->
<!--        </h1>-->
<!--    </div>-->
<!---->
<!---->
<!---->
<!--    <form action="--><?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?><!--" method="post">-->
<!---->
<!--        --><?php
//        $add=new functions();
//        $add->get_article();
//        ?>
<!--        <div class="col-md-8">-->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="title">Title </label>-->
<!--                <input type="text" name="title" class="form-control">-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="short_desc">Short Description</label>-->
<!--                <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"></textarea>-->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="description">Description</label>-->
<!--                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>-->
<!--            </div>-->
<!---->
<!---->
<!--        </div><!--Main Content-->-->
<!---->
<!---->
<!--        <!-- SIDEBAR-->-->
<!---->
<!---->
<!--        <aside id="admin_sidebar" class="col-md-4">-->
<!---->
<!--            <!-- Product Image -->-->
<!--            <div class="form-group">-->
<!--                <label for="image">Image</label>-->
<!--                <input type="file" name="image">-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <label for="status">Status</label>-->
<!--                <input type="checkbox" name="status" value="1">-->
<!---->
<!--            </div>-->
<!---->
<!--            <div class="form-group">-->
<!--                <button class="btn btn-primary" type="submit" name="Add">Add</button>-->
<!--            </div>-->
<!---->
<!--        </aside><!--SIDEBAR-->-->
<!---->
<!---->
<!---->
<!--    </form>-->
