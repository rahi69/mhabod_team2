<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت آموزش</title>
    <!--angular-->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

    <!--BOOTSTRAP-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="education.css">
<link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />

</head>
<body>
<button class="hidden-lg" id="showListHome" onclick="showListHome()"></button>

<script>
    function showListHome() {
        var x = document.getElementById("HomeLIST");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
</script>
<div>

    <img id="imgProfile" src="img/CIRLEpROFILE.jpg"/>
</div>
<div class="container-fluid col-lg-12">
    <div  id="container" class="col-lg-8">

        <div id="header-Education" class="row col-lg-12">مدیریت گالری</div>
        <div id="Title" class="row col-lg-12">
            <div class="col-lg-12 dropdown">
                <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown">
                    دسته بندی ویدئوها
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">گروه اول</a>
                    <a class="dropdown-item" href="#">گروه دوم</a>
                    <a class="dropdown-item" href="#">گروه سوم</a>
                </div>
            </div>
        </div>

        <div class="row col-lg-12 ListGallery">
            <div class="SCard">
                <video class="Svideo"></video>
                <button>حذف</button><button>ویرایش</button>
            </div>


            <div class="MCard">
                <video class="Mvideo"></video>
                <button>حذف</button><button>ویرایش</button>
            </div>

            <div class="LCard">
                <video class="Lvideo"></video>
                <button>حذف</button><button>ویرایش</button>
            </div>

            <div class="xsCard">
                <video class="xsvideo"></video>
                <button>حذف</button><button>ویرایش</button>
            </div>
            <div class="XLCard">
                <video class="XLvideo"></video>
                <button>حذف</button><button>ویرایش</button>

            </div>

            <div class="SCard">
                <video class="Svideo"></video>
                <button>حذف</button><button>ویرایش</button>
            </div>
        </div>

    </div>
    <!--MENU LIST-->
    <div id="HomeLIST"  class="nav-side-menu col-lg-4">

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <!--PIC PROFILE-->

                <li data-toggle="collapse" data-target="#ads" class="collapsed">
                    <a class="list" href="main.html"><i class="fa fa-camera fa-lg"></i>صفحه اصلی </a>

                </li>

                <li onclick="showGallery()" data-toggle="collapse" data-target="#ads" class="collapsed">
                    <a class="list" href="Managmant-Gallery.html"><i class="fa fa-camera fa-lg"></i> مدیریت گالری </a>

                </li>


                <li onclick="showArticle()" data-toggle="collapse" data-target="#service" class="collapsed">
                    <a class="list" href="ManagmantArticle.html"><i class="glyphicon glyphicon-duplicate fa-lg"></i> مدیریت مقالات </a>
                </li>


                <li onclick="ShowEducation()" data-toggle="collapse" data-target="#new" class="collapsed">
                    <a class="list" href="Managment-Education.html"><i class="glyphicon glyphicon-briefcase fa-lg"></i> مدیریت آموزش </a>
                </li>
                <li onclick="List()" data-toggle="collapse" data-target="#ads" class="collapsed">
                    <a class="list()" href="#"><i class="fa fa-black-tie fa-lg"></i> درباره من </a>
                </li>


            </ul>

        </div>

    </div>
</div>


</body></body>
</html>



