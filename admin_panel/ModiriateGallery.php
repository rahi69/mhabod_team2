<?php include_once "../resources/config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Menu Page</title>
    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<style>
    #titlePage{
        width: 100%;
        height: 50px;
        background-image: url("img/backList.jpg");
        background-size: cover;
        padding: 10px;
        margin: auto;
    }
    #titlePage span{
        font-family: IRANSans;
        font-weight: bold;
        font-size: 15px;
        color: #ffffff;
        text-align:right;
    }
    #ManagementGallery{
        height: auto;
        margin-bottom: 20px;
        margin-right: 10px;
        margin: auto;
    }


    #buttonBox{
        background-color: #ffffff;
        margin: auto;
        padding-bottom: 10px;
    }
    #buttonBox button{
        margin-right: 20px;
        margin-top: 10px;
        border-radius: 5px;
        cursor: pointer;
        background-color: #8fbcf3;
        color: #ffffff;
        font-weight: bold;
        border: none;
        padding: 8px;
        font-family: IRANSans;
    }
    #listsVideo{
        background-color: #ffffff;
        margin: auto;
        padding-top: 20px;
    }

    .CARDvideo{
        float: right;
        background-color: #1d6175;
        width:24%;
        height: 180px;
        margin: 20px;
        position: relative;
        padding: 20px;
        border-radius: 10px;
    }
    #listsVideo .XLvideo {
        border: 2px solid #ffffff;
        width:100%;
        height:83%;
        background-image: url("img/backVideo.jpg");
        background-size: cover;
    }
    /*..................................................*/
    * {
        box-sizing: border-box;
    }

    .openBtn {
        background: #ff5e83;
        border: none;
        padding: 10px 15px;
        /*font-size: 20px;*/
        cursor: pointer;
        border-radius:5px;
        color: #ffffff;
        font-weight: bold;
    }

    .openBtn:hover {
        background: #2fd8da;

    }

    .overlay {
        height: 100%;
        width: 100%;
        display: none;
        position: fixed;
        z-index: 2000;
        top: 0;
        left: 0;
        background-color: rgb(0,0,0);
        background-color: rgba(0,0,0, 0.9);
    }

    .overlay-content {
        position: relative;
        top:10%;
        width: 80%;
        text-align: center;
        margin-top: 30px;
        margin: auto;
    }

    .overlay .closebtn {
        position: absolute;
        top: 20px;
        right: 45px;
        font-size: 60px;
        cursor: pointer;
        color: white;
    }

    .overlay .closebtn:hover {
        color: #2fd8da;
    }

    .overlay input[type=text] {
        padding: 15px;
        font-size: 17px;
        border: none;
        float: left;
        width: 80%;
        background: white;
    }

    .overlay input[type=text]:hover {
        background: #f1f1f1;
    }

    .overlay button {
        float: left;
        width: 20%;
        padding: 15px;
        background: #2fd8da;
        font-size: 17px;
        border: none;
        cursor: pointer;
    }

    .overlay button:hover {
        background: #bbb;
    }
    /*......................................................../*/
    .dropbtn {

        color: white;
        padding: 5px;
        font-weight: bold;
        border: none;
        border-radius: 5px;
    }

    .dropdown {
        position: relative;
        /*display: inline;*/
        direction: rtl;
    }
    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        left: 1.5%;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px;
        z-index: 1;
        top: 55px;
        border-radius: 5px;

    }

    .dropdown-content a {
        color: black;
        padding:5px;
        text-decoration: none;
        display: block;


    }

    .dropdown-content a:hover {
        background-color: #ff5e83;
    }

    .dropdown:hover .dropdown-content {
        display: block;
    }

    .dropdown:hover .dropbtn {
        background-color: #2fd8da;
    }
/*................................................*/
    h3{
        direction: rtl;
        text-align: right;
        margin: auto;
        margin-top: 20px;
        background-color: #2fd8da;
        color: #ffffff;
        margin-top: 13%;
        padding: 5px;
        border-radius: 10px;
    }
    .overlay ul{
        margin-top: 10px;
        list-style-type: none;
    }
    .overlay ul li p{
        direction: rtl;
        text-align: right;
        color: #ffffff;
        font-family: IRANSans;
        background-color: #ff5e83;
        padding: 7px;
        border-radius: 5px;

    }
    .overlay li{
        margin: auto;

    }
    .overlay li button{
        margin-right: 5px;
        width: 100px;
        padding: 5px;
        background-color: #2fd8da;
        color: #ffffff;
        border: none;

    }
    .overlay li button:hover{
        background-color: #ff5e83;
    }
    @media ( max-width: 425px) {
        .overlay-content .dropbtn{
            width: 100%;
            margin-top: 40px;
            margin-bottom: 30%;
        }
        .dropdown-content{
            margin-top: 40px;
            margin-left: 10px;
        }
        .overlay-content li button{
            margin-right: 5px;
            width: auto;
            padding: 1px;
            background-color: #2fd8da;
            color: #ffffff;
            border: none;
            font-size: 15px;
        }
        .overlay ul li p{
            direction: rtl;
            text-align: right;
            color: #ffffff;
            font-family: IRANSans;
            background-color: #ff5e83;
            padding: 5px;
            border-radius: 5px;
            font-size: 10px;

        }
    }
    @media ( min-width: 768px) {
        .overlay-content .dropbtn{
            width: 100%;
            margin-top: 40px;
            margin-bottom: 5%;
        }
        .dropdown-content{
            margin-top: 40px;
            margin-left: 10px;
            width: 50%;
            text-align: right;
        }
    }
    .overlay-content input{
        border-radius: 10px;
        text-align: right;
        background-color: #2fd8da;
        width: 50px;
        font-weight: bold;

    }
    .overlay-content #mybtn:hover{
        width: 80%;
        background-color: #ff5e83;
        transition: 1s;
    }
    #mybtn{
        width: 80%;
        background-color: #2fd8da;
        padding: 15px;
        font-family: IRANSans;
        font-weight: bold;
    }
    /*.......................*/
    .containerrrrr form{
        font-weight: bold;
        font-family: IRANSans;
        direction: rtl;
        text-align: right;
        background-color: #ffffff;
        padding: 20px;
        border-radius: 10px;
        margin: 10%;
    }
    .containerrrrr button{
        direction: rtl;!important;
        margin-top: -15px;!important;
        width: 100px;!important;
        height: auto;!important;
        background-color:firebrick;!important;
        color: #ffffff;
        margin-left: 740px;
        padding: 5px;!important;

    }
    .containerrrrr .checkbox input{
      margin-right: 10px;
    }
    .containerrrrr #myFile{
        background-color: #ffffff   ;
    }
    /*chenging*/
</style>

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



