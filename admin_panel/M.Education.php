<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>مدیریت آموزشی </title>
    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/education2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>

<body>
    <img id="imgProfile" src="img/CIRLEpROFILE.jpg" height="124" width="89"/>
</div>
<br/>

<div class="container-fluid col-lg-12">

    <div  id="container" class="col-lg-8">
<div class="row col-xs-12" id="titlePage">
<span>مدیریت آموزش</span>
</div>

        <div class="row" id="ManagementGallery">

            <div id="buttonBox" class="row">
                <button class="openBtn" onclick="openSearch1()">افزودن دسته</button>
                <button class="openBtn" onclick="openSearch2()">افزودن ویدئو</button>
                <button class="openBtn" onclick="openSearch()">مدیریت دسته بندی ها</button>

            </div>
            <br/>
            <div id="listsVideo" class="row">
                <div class="CARDvideo">
                    <video class="XLvideo"></video>
                    <button>حذف</button><button>ویرایش</button>

                </div>
                <div class="CARDvideo">
                    <img src="img/backVideo.jpg" class="XLvideo"></img>
                    <button>حذف</button><button>ویرایش</button>
<!--                    سیسشیحنبخنب-->

                </div>
            </div>


            <!--pup uo 1-->
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">

                    <div class="dropdown row col-xs-12 col-lg-12">
                        <button class="dropbtn">دسته بندی</button>
                        <div class="dropdown-content">
                            <a href="#">دسته بندی اول</a>
                            <a href="#">دسته بندی دوم</a>
                            <a href="#">دسته بندی سوم</a>
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
                    <a href="#myOverlay" id="mybtn" class="row col-lg-12 btn btn-primary btn-lg">افزودن دسته</a>
                    <br/><br/><br/><br/>
                    <input class="row col-lg-12" type="text" placeholder="نام دسته">

                </div>
            </div>

            <div id="myOverlaytow" class="overlay">
                <span class="closebtn" onclick="closeSearch2()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <div class="containerrrrr">
                        <form action="">
                            <br/>
                            <div class="form-group">
                                <label> عنوان:</label>
                                <input type="text" class="form-control"  name="title">
                            </div>
                            <div class="form-group">
                                <label>قیمت:</label>
                                <input type="text" class="form-control"  name="price">
                            </div>

                            <div class="form-group">
                                <label for="comment">توضیحات:</label>
                                <textarea class="form-control" rows="5" id="comment"></textarea>
                            </div>
                            <label for="video">انتخاب ویدئو</label>
                            <input style="direction: rtl;width: 100%" type="file" id="myFile"><br/>
                            <!--        <script>-->
                            <!--            function myFunction() {-->
                            <!--                var x = document.getElementById("myFile");-->
                            <!--                x.disabled = true;-->
                            <!--            }-->
                            <!--        </script>-->

                            <div style="direction: rtl;width: 100%" class="checkbox">
                                <label><input type="checkbox" name="remember"> فعال</label>&nbsp;&nbsp;
                            </div><br/>
                            <div style="direction: rtl;width: 100%">
                                <button style="direction: rtl" type="submit" class="btn btn-danger">ثبت</button>
                            </div>
                        </form>
                    </div>


                </div>
            </div>

        </div>

    </div>


    <div id="headerList"  class="nav-side-menu col-lg-4">

        <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>

    </div>


</div>
<br/>
<?php
if(isset($_GET['delete_article']))
{
    include '../admin_panel/delete_article.php';
}
if(isset($_GET['edit_article']))
{
    include '../admin_panel/edit_article.php';
}
if(isset($_GET['delete_video']))
{
    include '../admin_panel/delete_video.php';
}
?>
<!--<div id="footer" class="row">فوتر صفحه</div>-->

</body>
</html>

<script>
    function openSearch() {
        document.getElementById("myOverlay").style.display = "block";
    }

    function closeSearch() {
        document.getElementById("myOverlay").style.display = "none";
    }
</script>
<script>
    function openSearch1() {
        document.getElementById("myOverlayone").style.display = "block";
    }

    function closeSearch1() {
        document.getElementById("myOverlayone").style.display = "none";
    }
</script>
<script>
    function openSearch2() {
        document.getElementById("myOverlaytow").style.display = "block";
    }

    function closeSearch2() {
        document.getElementById("myOverlaytow").style.display = "none";
    }
</script>



