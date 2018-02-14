<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت مقالات</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="font.css">

    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>

<button class="hidden-lg" id="showListHome" onclick="showListHome()"></button>

<script src="Scripts/main.js"></script>
<div>

    <img id="imgProfile" src="img/CIRLEpROFILE.jpg" height="124" width="89"/>
</div>
<div class="container-fluid col-lg-12">
    <div  id="container" class="col-lg-8">

        <div class="row" id="ManagementArticle">
            <div id="header-Article" class="row">مدیریت مقالات</div>
            <ul  class="row"id="ulList">
                <?php $function=new functions();
                $function->manage_article();
                ?>
<!--                <li>-->
<!--                    <button class="DeleteBox btn btn-primary">حذف</button>-->
<!--                    &nbsp;&nbsp;&nbsp;<button class="EditBox btn btn-primary">ویرایش</button><span class="nameTitle">نام مقاله</span>&nbsp;&nbsp;-->
<!--                    <span>توضیحات مربوط به مقاله</span>-->
<!--                </li>-->

            </ul>
            <div id="buttonBox1" class="row">
                <form method="post" action="add_article.php">
                    <button type="submit" name="Add_article">افزودن مقاله</button><br/>
                </form>
<!--                <button>افزودن مقاله</button><br/>-->
            </div>
        </div>
    </div>
    <!--MENU LIST-->
    <div id="HomeLIST"  class="nav-side-menu col-lg-4">
        <!--BUTTON LIST-->
        <!--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>-->

        <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>


    </div>
</div>


</body>
</html>