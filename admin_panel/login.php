<?php require_once '../resources/config.php'; ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-inverse">

    <div class="container-fluid">

        <div class="navbar-header">

            <a class="navbar-brand" href="index.php" style="color: red">Home</a>

        </div>
    </div>
</nav>

</body>
</html>
<!-- Page Content -->
<div class="container">
    <header>

        <h1 class="text-center">Login admin </h1>
        <div class="col-sm-4 col-sm-offset-5" style="margin:10px;">
            <form class="" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <?php $function=new functions();
                $function->login();
                ?>
                <div class="form-group"><label for="">
                        username<input type="text" name="username" class="form-control"></label>
                </div>
                <div class="form-group"><label for="password">
                        Password<input type="password" name="password" class="form-control"></label>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="login" class="btn btn-primary" >
                </div>
            </form>
        </div>
    </header>
</div>
<!-- /.container -->

