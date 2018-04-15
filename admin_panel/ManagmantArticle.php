<?php include_once "../resources/config.php"; ?>
<?php
if(!isset($_SESSION['username']))
{
    $function->redirect("../admin_panel/LoginPage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>مدیریت مقالات</title>
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css"/>
    <link rel="stylesheet" href="css/article.css">
    <link rel="stylesheet" href="font.css">

    <!--BOOTSTRAP-->
    <link href="Content/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<body>
<button class="hidden-lg" id="showListHome" onclick="showListHome()"></button>
<script src="Scripts/main.js"></script>
<div>

    <img id="imgProfile" src="img/CIRLEpROFILE.jpg" height="124" width="89"/>
</div>
<div class="container-fluid col-lg-12">
    <div id="container" class="col-lg-8">
        <div class="row ParentArticle" id="ManagementArticle">
            <div id="header-Article" class="row">مدیریت مقالات</div>

            <div class="parentCardArticle">
                <?php $function->manage_article(); ?>
            </div>
        </div>
        <br/>
        <div id="buttonBox1" class="row">
            <form method="post" action="add_article.php">
                <button type="submit" name="Add_article">افزودن مقاله</button>
                <br/>
            </form>
        </div>
    </div>
    <!--MENU LIST-->
    <div id="HomeLIST" class="nav-side-menu col-lg-4">

        <?php include TEMPLATE_FRONT . 'nav_right.php'; ?>


    </div>
</div>
</body>
</html>