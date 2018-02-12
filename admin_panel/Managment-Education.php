<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت آموزشی</title>



    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/education.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


</head>
<body style="font-family: IRANSans">

<button class="hidden-lg" id="showListHome" onclick="showListHome()"></button>

<script src="Scripts/main.js"></script>
<div>

    <img id="imgProfile" src="img/UserPicture.jpg"/>
</div>
<br/>
<div class="container-fluid col-lg-12">

    <div  id="container" class="col-lg-8">

        <div class="row" id="Managementeducation">
            <div id="header-Gallery" class="row">مدیریت آموزش</div>

            <div id="buttonBox" class="row">
                <div id="Title" class="row col-lg-12">

                </div>
                <button class="openBtn" onclick="openSearch1()">افزودن دسته</button>
                <button class="openBtn" onclick="openSearch2()">افزودن ویدئو</button>
                <button class="openBtn" onclick="openSearch()">مدیریت دسته بندی ها</button>

            </div>
            <br/>
            <div id="listsVideo" class="row">
                <?php $function->manage_video(); ?>
            </div>
            <br/>
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">

                    <div class="dropdown row col-xs-12 col-lg-12">
                        <button class="dropbtn">دسته بندی</button>
                        <div class="dropdown-content">
                          <?php $function->manage_list_category();?>
                        </div>
                    </div>

                    <h3 class="row col-lg-12 col-xs-12">دسته بندی لیست ها</h3>
                    <ul class="row col-lg-12 col-xs-12">
                        <li>
                            <button class="btn btn-primary btn-md">حذف</button><button class="btn btn-primary btn-md">ویرایش</button><button class="btn btn-primary btn-md">غیر فعال</button><p>طراحی چهره</p>
                        </li>
                        <li>
                            <button class="btn btn-primary btn-md">حذف</button><button class="btn btn-primary btn-md">ویرایش</button><button class="btn btn-primary btn-md">غیر فعال</button><p>طراحی چهره</p>
                        </li>
                        <li>
                            <button class="btn btn-primary btn-md">حذف</button><button class="btn btn-primary btn-md">ویرایش</button><button class="btn btn-primary btn-md">غیر فعال</button><p>طراحی چهره</p>
                        </li>
                        <li>
                            <button class="btn btn-primary btn-md">حذف</button><button class="btn btn-primary btn-md">ویرایش</button><button class="btn btn-primary btn-md">غیر فعال</button><p>طراحی چهره</p>
                        </li>
                        <li>
                            <button class="btn btn-primary btn-md">حذف</button><button class="btn btn-primary btn-md">ویرایش</button><button class="btn btn-primary btn-md">غیر فعال</button><p>طراحی چهره</p>
                        </li>

                    </ul>
                </div>
            </div>


            <!--..................................................................................................-->
            <!--PUP UP2-->
            <div id="myOverlayone" class="overlay">
                <span class="closebtn" onclick="closeSearch1()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <?php
                        $function->get_cat(); ?>

                        <input class="row col-lg-12" name="name_cat" type="text" placeholder="نام دسته">
                        <br/><br/><br/><br/>
                        <button id="mybtn" type="submit" name="submit"  class="row col-lg-12 btn btn-primary btn-lg" >افزودن دسته</button>
                    </form>

                </div>
            </div>
            <div id="myOverlayTwo" class="overlay">
                <span class="closebtn" onclick="closeSearch2()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <div class="form">
                        <form>
                            <input style="margin-bottom: 50px" type="text" class="form-control text-right" placeholder="نام" required autofocus>
                            <br>
                            <input type="text" class="form-control text-right" placeholder="قسمت" required autofocus>
                            <br>
                            <div class="form-group">
                                <textarea class="text-editor text-right TextEditor" rows="5"></textarea>
                            </div>
                            <input type="button" class="form-control wrap videobuttom" value="ویدئو">

                            <input type="button" class="form-control wrap" value="عکس">
                            <br>

                        </form>

                    </div>

                </div>
            </div>

        </div>

    </div>
    <div id="HomeLIST"  class="nav-side-menu col-lg-4">
        <!--BUTTON LIST-->
        <!--<i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>-->
        <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>

    </div>


</div>


</body>
</html>
<script>
    function showListHome() {
        var x = document.getElementById("HomeLIST");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }

    function openSearch1() {
        document.getElementById("myOverlayone").style.display = "block";
    }

    function closeSearch1() {
        document.getElementById("myOverlayone").style.display = "none";
    }

    function openSearch2() {
        document.getElementById("myOverlayTwo").style.display = "block";
    }

    function closeSearch2() {
        document.getElementById("myOverlayTwo").style.display = "none";
    }
</script>


