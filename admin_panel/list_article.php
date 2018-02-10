<?php include_once "../resources/config.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List article</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

</head>
<body style="margin-left: 10px;margin-top: 10px">

<form method="post" action="add_article.php">
    <button class="btn btn-primary" type="submit"  name="Add_article">Add article</button>
</form>


<div class="col-lg-12">
    <h1 class="page-header">
        article    </h1>
    <h2 style="text-align: center"> </h2>
    <p class="bg-success">
    </p>

    <div class="col-md-12">

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>name_article</th>
                <th>description</th>
                <th>image</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $list=new functions();
            $list->list_article();
            ?>
            </tbody>
        </table><!--End of Table-->
    </div>
</div>

</body>
</html>
