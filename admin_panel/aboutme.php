<?php
include '../resources/config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>درباره من</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.css">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.css"  media="screen,projection"/>

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
                <form enctype="multipart/form-data" method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">

                    <div class="embed-responsive embed-responsive-16by9">
                        <video class="embed-responsive-item "></video>
                    </div>
                    <br>
                    <div class="file UplodeButton Button">
                        انتخاب فایل
                        <input class="Input" type="file" name="file"/>

                    </div>
<!--                    <br>-->
<!--                    <input type="submit" name="upload" class="file UplodeButton Button"  value="  آپلود ویدئو">-->
                   <br><hr>
                    <?php
                    $sql = "SELECT * FROM tbl_aboutme";
                    $query = $function->query($sql);
                    $function->confirm($query);
                    $row = $function->fetch_array($query);
                            ?>
                    <textarea class="form-control description" id="description" placeholder="متن درباره ما" rows="5" name="description"><?php echo $row['biog']; ?></textarea>
                    <br>
                    <input style="border: none" type="submit" name="ab_save" class="Button" value=" ذخیره فیلم و متن">
                </form>
                    <?php $function->about_me();
                    $function->display_message();
                    ?>

                <br><hr>
<!--                <form>-->
                    <div id="myOverlay" class="overlay">
                        <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                        <div class="overlay-content">

                            <form method="post"  action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>">
                                <input type="text" name="link" class="Social" placeholder="لینک">
                                <br><br>
                                <a href="#"><div class="SaveButton">انصراف</div></a>
<!--                                <a href="#"><div class="CancelButton">ذخیره</div></a>-->
                                <input type="submit" class="CancelButton" name="social" value="ثبت">
                                <?php $function->social_network();?>
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
<div class="row col-lg-12 parentFixBtn">
<div class="fixed-action-btn horizontal click-to-toggle">
    <a class="btn-floating btn-large red">
        <i class="material-icons">menu</i>
    </a>
    <ul>

        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/facebook.png" name="facebook" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Pinterest.png" name="pinterest" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Gogleplus.png" name="google_plus" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Instagram.png" name="instagram" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Linkdin.png" name="linkedin" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/skype.png" name="skype" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/telegram.png" name="telegram" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Twitter.png" name="twitter" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Whatsapp.png" name="whatsapp" /></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/youtube.png" name="youtube"/></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Viber.png" name="telephone"/></a></li>
        <li><a class="btn-floating" onclick="openSearch()"><img class="Img" src="img/Social%20Networks/Vero.png" name="email"/></a></li>
    </ul>
</div>

</div>
</body>
</html>