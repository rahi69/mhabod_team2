<?php include_once "../resources/config.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List video</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script>
    $(document).ready(function(){
        $("#search_cat").click(function(){
//            $("#film").hide(2000);
            $("#film").hide(2000);
          //  $("#film").css("background-color", "yellow");
        });
    });

</script>
</head>
<body style="margin-left: 10px;margin-top: 10px">
<div class="col-lg-12">
    <h1 class="page-header">
        Video
    </h1>
    <h2 style="text-align: center"> </h2>
    <p class="bg-success">
    </p>
    <div class="col-md-6">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label for="category">category</label>
    <select name="category">
        <?php
        $function=new functions();
        $sql="SELECT * FROM tbl_category";
        $result=$function->query($sql);
        while ($row=$function->fetch_array($result))
        {?>
            <option value="<?php echo $row['id_category']?>"><?php echo $row['name_category']?></option>
        <?php }?>
    </select>
    <button id="search_cat" type="submit" class="btn btn-primary" name="search_cat">find</button>
    </form>



            <h2>whole films</h2>
<!--        <form method="post" name="video">-->

        <?php
        $function->list_video(); ?>
<!--        </form>-->

    </div>

    <div class="col-md-6">

        <h2>selected list</h2>
        <?php
        if(isset($_POST['search_cat'])){
            $function->filter_list_video();
//            $video=$_POST['video'];
        }?>

    </div>

</div>
<aside id="admin_sidebar" class="col-md-4">
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <?php
          $function->button();
    ?>
    <button  class="btn btn-primary" type="submit" name="Add_video">Add Video</button>
    <button class="btn btn-primary" type="submit" name="Add_category">Add category</button>
    <button class="btn btn-primary" type="submit" name="Amin_category">Admin category</button>
</form>


</aside>
</body>
</html>
