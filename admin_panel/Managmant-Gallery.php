<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت گالری</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



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
<div>
    <img id="imgProfile"  src="img/CIRLEpROFILE.jpg"/>

</div>

<div class="container-fluid col-lg-12">

    <div  id="container" class="col-lg-8">

        <div id="header-GAllery" class="row col-lg-12">
            مدیریت گالری
        </div>
        <div id="Parent">
        <div class="row col-lg-12 ListGallery">

            <?php $function->manage_gallery(); ?>
<!--            <div class="card">-->
<!--                <img class="card-img-top" src="img/CIRLEpROFILE.jpg" alt="Card image cap"><br/><br/>-->
<!--                <div class="card-body">-->
<!--                    <a href="#" class="btn btn-primary">حذف</a>-->
<!--                    <a href="#" class="btn btn-primary">ویرایش</a>-->
<!--                    <span >عنوان عکس</span >-->
<!--                </div>-->
<!--            </div>-->

<!--            <div class="CardVideo">-->
<!--                <video src="img/mov_bbb.mp4"></video>-->
<!--                <br><br>-->
<!--                <div class="LinkVideo">-->
<!--                    <a href="#" class="btn btn-primary">حذف</a>-->
<!--                    <a href="#" class="btn btn-primary">ویرایش</a>-->
<!--                    <span >عنوان عکس</span >-->
<!--                </div>-->
<!--            </div>-->

        </div>
        </div>

    </div>

    <div id="HomeLIST"  class="nav-side-menu col-lg-4">
        <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>
    </div>
    <br/>
    <div class="row col-xs-12" id="Add-newGallery">
        <a href="add_gallery.php">اضافه کردن گالری جدید</a>
    </div>
</div>
</body>
</html>