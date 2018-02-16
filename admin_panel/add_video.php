<?php require_once '../resources/config.php'; ?>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Add Video </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<head>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/add_video.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<div class="col-md-12">

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <?php
        $add=new functions();
        $add->get_video();
        ?>
        <form>

            <div class="form-group">
                <label for="title">عنوان </label>
                <input type="text" name="title" class="form-control">

            </div>
            <div class="form-group">
                <label for="price">قیمت </label>
                <input type="text" name="price" class="form-control">

            </div>

            <div class="form-group">
                <label for="description">توضیحات</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <br/>
            <select style="border:none" name="category">
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
                <input type="file" name="image">

            </div>
            <div class="form-group">
                <label for="video">انتخاب ویدئو</label>
                <input type="file" name="video">

            </div>

            <div style="width: 15%" class="checkbox">
                <label><input type="checkbox" name=""> فعال</label>&nbsp;&nbsp;
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit" name="Add">ثبت</button>
            </div>


        </form>
