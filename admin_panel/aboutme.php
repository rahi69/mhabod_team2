<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت آموزش</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquerymin.js"></script>-->
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>-->
<!--    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>-->

    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/AboutUs.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        #header-Education{
            color: #ffffff;
            margin: auto;
            height: 50px;
            background-image: url("img/backList.jpg");
            background-size: cover;
            padding: 20px;
            font-weight: bold;
            margin-right: 10px;
            direction: rtl;

        }
    </style>
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

        <div id="header-Education" class="row col-lg-12">درباره ما</div>

        <div class="row col-lg-12 AboutUsContantDiv">
            <div class="form">
                <form>
                    <textarea class="form-control description" id="description" placeholder="متن درباره ما" rows="5" name="Description"></textarea>
                    <br>
                    <a href="#"><div class="Button">ذخیره</div></a>
                </form>
                <br><hr>
                <form>
                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item "></video>
                    </div>
                    <br>
                    <div class="file UplodeButton Button">
                        آپلود ویدئو
                        <input class="Input" type="file" name="file"/>
                    </div>
                    <br><hr>
                    <div class="fixed-action-btn horizontal click-to-toggle">
                        <a class="btn-floating btn-large red">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="facebook.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="pinterest.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="google plus.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="instagram.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="linkedin.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="skype.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="telegram.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="twitter.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="whatsapp.png" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="youtube.png" /></a></li>

                        </ul>
                    </div>

                    <div id="myOverlay" class="overlay">
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                        <div class="overlay-content">
                            <form action="/action_page.php">
                                <input type="text" class="Social" placeholder="لینک">
                                <br><br>
                                <a href="#"><div class="SaveButton">حذف</div></a>
                                <a href="#"><div class="CancelButton">ذخیره</div></a>
                            </form>
                        </div>
                    </div>

                    <script>
                        function openSearch() {
                            document.getElementById("myOverlay").style.display = "block";
                        }

                        function closeSearch() {
                            document.getElementById("myOverlay").style.display = "none";
                        }
                    </script>
                </form>
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

<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>

</body>
</html>