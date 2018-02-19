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
                <?php $function->manage_video();?>
            </div>
            <!--pup uo 1-->
            <div id="myOverlay" class="overlay">
                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                <div class="overlay-content">

                    <div class="dropdown row col-xs-12 col-lg-12">
                        <button class="dropbtn" name="dropBtn">دسته بندی</button>
                        <div class="dropdown-content">
                          <?php $function->manage_category();?>
                        </div>
                    </div>

                    <h3 class="row col-lg-12 col-xs-12">دسته بندی لیست ها</h3>
                    <ul class="row col-lg-12 col-xs-12">
                        <?php $function->manage_list_category();?>

                    </ul>
                </div>
            </div>
            <!--PUP UP2-->
            <div id="myOverlayone" class="overlay">
                <span class="closebtn" onclick="closeSearch1()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        <?php
                        $function->add_cat(); ?>
                    <button type="submit" name="submit" id="mybtn" class="row col-lg-12 btn btn-primary btn-lg">افزودن دسته</button>
<!--                        <button id="mybtn" type="submit" name="submit"  class="row col-lg-12 btn btn-primary btn-lg" >افزودن دسته</button>-->

                        <br/><br/><br/><br/>
                        <input class="row col-lg-12" name="name_cat" type="text" placeholder="نام دسته">
                    </form>
                </div>
            </div>
            <div id="myOverlaytow" class="overlay">
                <span class="closebtn" onclick="closeSearch2()" title="Close Overlay">×</span>
                <div class="overlay-content">
                    <div  class="containerrrrr">
                        <form   enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

                            <?php
                            $function->add_video();
                            ?>


                                <div class="form-group">
                                    <label for="title">عنوان </label>
                                    <input type="text" name="title" class="form-control" required>

                                </div>
                                <div class="form-group">
                                    <label for="price">قیمت </label>
                                    <input type="text" name="price" class="form-control" required>

                                </div>

                                <div class="form-group">
                                    <label for="description">توضیحات</label>
                                    <textarea name="description" id="" cols="30" rows="10" class="form-control" required></textarea>
                                </div>
                                <br/>
                                <select name="category" required>
                                    <option value="0">انتخاب دسته بندی</option>
                                    <?php
                                    $function=new functions();
                                    $sql = "SELECT * FROM tbl_category";
                                    $query = $function->query($sql);
                                    $function->confirm($query);
                                    //        $row = fetch_array($query);
                                    //        echo $row['cat_id'];
                                    while($row = $function->fetch_array($query)) {

                                        ?>
                                        <option   value="<?php echo $row['id_category'];?>"><?php echo $row['name_category'];?></option>

                                    <?php  } ?>
                                </select><br><br>

                                <!-- Product Image -->
                                <div class="form-group">
                                    <label for="image">انتخاب عکس</label>
                                    <input type="file" name="image" required>

                                </div>
                                <div id="choseFile" class="form-group">
                                    <label for="video">انتخاب ویدئو</label>
                                    <input type="file" name="video" required>

                                </div>

                                <div style="width: 15%" class="checkbox">
                                    <label><input type="checkbox" name="status" value="1"> فعال</label>&nbsp;&nbsp;
                                </div>
<br/>
                                <div class="form-group">
                                    <button style="margin-left:600px;" class="btn btn-danger" type="submit" name="Add">ثبت</button>
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



