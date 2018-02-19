<?php
include '../resources/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>درباره من</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!-- Compiled and minified JavaScript -->
    <!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.js"></script>
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
        #container{
            margin-bottom: 5%;
        }
    </style>
</head>
<body>

<div>

    <img id="imgProfile" src="img/CIRLEpROFILE.jpg"/>
</div>
<div class="container-fluid col-lg-12">
    <div  id="container" class="col-lg-8">

        <div id="header-Education" class="row col-lg-12">درباره ما</div>

        <div class="row col-lg-12 AboutUsContantDiv">
            <div class="form">
                <form method="post" action="">

                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item "></video>
                    </div>
                    <br>
                    <div class="file UplodeButton Button">
                        آپلود ویدئو
                        <input class="Input" type="file" name="file"/>
                    </div>
                    <br><hr>

                    <textarea class="form-control description" id="description" placeholder="متن درباره ما" rows="5" name="description"></textarea>
                    <br>
                    <div class="fixed-action-btn horizontal click-to-toggle">
                        <a class="btn-floating btn-large red">
                            <i class="material-icons">menu</i>
                        </a>
                        <ul>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/facebook.png" name="facebook" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/pinterest.png" name="pinterest" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/google plus.png" name="google_plus" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/instagram.png" name="instagram" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/linkedin.png" name="linkedin" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/skype.png" name="skype" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/telegram.png" name="telegram" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/twitter.png" name="twitter" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/whatsapp.png" name="whatsapp" /></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/youtube.png" name="youtube"/></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/youtube.png" name="telephone"/></a></li>
                            <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/youtube.png" name="email"/></a></li>

                        </ul>
                    </div>


                    <input style="border: none" type="submit" name="ab_save" class="Button" value="ذخیره">
<!--                </form>-->
                <br><hr>
<!--                <form>-->
                    <div id="myOverlay" class="overlay">
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                        <div class="overlay-content">
<!--                            <form>-->
                                <input type="text" class="Social" placeholder="لینک">
                                <br><br>
                                <a href="#"><div class="SaveButton">حذف</div></a>
<!--                                <a href="#"><div class="CancelButton">ذخیره</div></a>-->
                                <input type="submit" class="CancelButton" name="social">
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
        <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>

    </div>
</div>
<!--<div class="fixed-action-btn horizontal click-to-toggle">-->
<!--    <a class="btn-floating btn-large red">-->
<!--        <i class="material-icons">menu</i>-->
<!--    </a>-->
<!--    <ul>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/facebook.png" name="facebook" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/pinterest.png" name="pinterest" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/google plus.png" name="google_plus" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/instagram.png" name="instagram" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/linkedin.png" name="linkedin" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/skype.png" name="skype" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/telegram.png" name="telegram" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/twitter.png" name="twitter" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/whatsapp.png" name="whatsapp" /></a></li>-->
<!--        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/youtube.png" name="youtube"/></a></li>-->
<!---->
<!--    </ul>-->
<!--</div>-->
</body>
</html>