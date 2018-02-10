<?php include_once "../resources/config.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../public/admin/css/all.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <title>HOME</title>
</head>
<body>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" href="#" style="color: red">paint learn</a>

        </div>

        <ul class="nav navbar-nav">

            <li class="active"><a href="index2.php">Home</a></li>
            <li class="nav-item">
                <a class="nav-link" href="list_article.php">admin</a>
            </li>


        </ul>

        <ul class="nav navbar-nav navbar-right">

            <li><a href="signUp.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>

            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                    <?php

                    if(isset($_SESSION['username']) ){
                        echo $_SESSION['username'];
                    } else {

//                        echo "unregistered user";
                    }
                    ?>

                    <b class="caret"></b></a>
                <ul class="dropdown-menu">

                    <li class="divider"></li>
                    <li>
                        <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                </ul>
            </li>

        </ul>


    </div>
</nav>
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

