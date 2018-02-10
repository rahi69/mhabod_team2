<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت گالری</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--angular-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>-->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
    <link rel="stylesheet" type="text/css" href="css/gallery.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<button class="hidden-lg" id="showListHome" onclick="showListHome()"></button>

<script src="Scripts/main.js"></script>
<div>

    <img id="imgProfile" src="img/CIRLEpROFILE.jpg"/>
</div>
<div class="container-fluid col-lg-12">
    <div  id="container" class="col-lg-8">

        <div id="header-GAllery" class="row col-lg-12">مدیریت گالری</div>


        <div class="row col-lg-12 ListGallery">

  <?php $function->manage_gallery();?>
        </div>

    </div>
    <!--MENU LIST-->
<!--    <div id="HomeLIST"  class="nav-side-menu col-lg-4">-->
<!---->
<!--        <div class="menu-list">-->
<!---->
<!--            <ul id="menu-content" class="menu-content collapse out">-->
<!--                <!--PIC PROFILE-->-->
<!---->
<!--                <li data-toggle="collapse" data-target="#ads" class="collapsed">-->
<!--                    <a class="list" href="index.php"><i class="fa fa-camera fa-lg"></i>صفحه اصلی </a>-->
<!---->
<!--                </li>-->
<!---->
<!--                <li onclick="showGallery()" data-toggle="collapse" data-target="#ads" class="collapsed">-->
<!--                    <a class="list" href="Managmant-Gallery.php"><i class="fa fa-camera fa-lg"></i> مدیریت گالری </a>-->
<!---->
<!--                </li>-->
<!---->
<!---->
<!--                <li onclick="showArticle()" data-toggle="collapse" data-target="#service" class="collapsed">-->
<!--                    <a class="list" href="ManagmantArticle.php"><i class="glyphicon glyphicon-duplicate fa-lg"></i> مدیریت مقالات </a>-->
<!--                </li>-->
<!---->
<!---->
<!--                <li onclick="ShowEducation()" data-toggle="collapse" data-target="#new" class="collapsed">-->
<!--                    <a class="list" href="Managment-Education.php"><i class="glyphicon glyphicon-briefcase fa-lg"></i> مدیریت آموزش </a>-->
<!--                </li>-->
<!--                <li onclick="List()" data-toggle="collapse" data-target="#ads" class="collapsed">-->



<!--                    <a class="list()" href="#"><i class="fa fa-black-tie fa-lg"></i> درباره من </a>-->
<!--                </li>-->
<!---->
<!---->
<!--            </ul>-->
<!---->
<!--        </div>-->
<!---->
<!--    </div>-->
    <div id="HomeLIST"  class="nav-side-menu col-lg-4">
        <!--BUTTON LIST-->
        <!--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>-->

        <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>


    </div>
</div>


</body>
</html>