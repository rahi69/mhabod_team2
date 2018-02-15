<?php require_once '../resources/config.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <title>Sign Up</title>
</head>
<body>
<!--<div class="modal">-->
    <form class="modal-content" method="post">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <p><span><?php  $function->display_message(); ?></span></p>
            <hr>
            <label><b>username</b></label>
            <input type="text" placeholder="Enter username" name="username" required><br>

            <label><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required><br>

            <label><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required><br>

            <label><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="re_password" required><br>

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
            <div class="clearfix">
                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                <button type="submit" name="SignUp" class="signupbtn">Sign Up</button>
                <?php $function->sign_up();?>
            </div>
        </div>
    </form>
<!--</div>-->
</body>
</html>