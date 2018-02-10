<?php require_once '../resources/config.php'; ?>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Add Video </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Add Video
        </h1>
    </div>



    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <?php
        $add=new functions();
        $add->get_video();
        ?>
        <div class="col-md-8">

            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" name="title" class="form-control">

            </div>
            <div class="form-group">
                <label for="price">Price </label>
                <input type="text" name="price" class="form-control">

            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>


        </div><!--Main Content-->


        <!-- SIDEBAR-->


        <aside id="admin_sidebar" class="col-md-4">
            <label for="category">category</label>
            <select name="category">
                <option value="0">Select category</option>
                <?php
                $function=new functions();
                $sql = "SELECT * FROM tbl_category";
                $query = $function->query($sql);
                $function->confirm($query);
                //        $row = fetch_array($query);
                //        echo $row['cat_id'];
                while($row = $function->fetch_array($query)) {
//            echo $row['cat_id'];

                    ?>
                    <option   value="<?php echo $row['id_category'];?>"><?php echo $row['name_category'];?></option>

                <?php  } ?>
            </select><br><br>

            <!-- Product Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image">

            </div>
            <div class="form-group">
                <label for="video">Video</label>
                <input type="file" name="video">

            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <input type="checkbox" name="status" value="1">

            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit" name="Add">Add</button>
            </div>

        </aside><!--SIDEBAR-->



    </form>
