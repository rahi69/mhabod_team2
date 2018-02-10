<?php require_once '../resources/config.php'; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add User </title>
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
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php
    $function=new functions();
    $function->sign_up();
    ?>


    <div class="col-md-8">

        <div class="form-group">
            <label for="username">Username: </label>
            <input type="text" name="username" class="form-control">

        </div>

        <div class="form-group">
            <label for="password">Password: </label>
            <input type="password" name="password" class="form-control">

        </div>

        <div class="form-group">
            <label for="rpassword">repeat Password: </label>
            <input type="password" name="rpassword" class="form-control">

        </div>

        <div class="form-group">
            <label for="email">Email: </label>
            <input type="email" name="email" class="form-control">

        </div>

            <div class="form-group">
                <button type="submit" name="submit" class="btn btn-primary btn-lg">sign up</button>
            </div>

        </aside>


    </div>

</form>

</body>
</html>