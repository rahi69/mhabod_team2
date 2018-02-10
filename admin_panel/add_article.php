<?php require_once '../resources/config.php'; ?>
<meta charset="UTF-8">
<meta name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Add article </title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<div class="col-md-12">

    <div class="row">
        <h1 class="page-header">
            Add article
        </h1>
    </div>



    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">

        <?php
        $add=new functions();
        $add->get_article();
        ?>
        <div class="col-md-8">

            <div class="form-group">
                <label for="title">Title </label>
                <input type="text" name="title" class="form-control">

            </div>

            <div class="form-group">
                <label for="short_desc">Short Description</label>
                <textarea name="short_desc" id="" cols="30" rows="3" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>


        </div><!--Main Content-->


        <!-- SIDEBAR-->


        <aside id="admin_sidebar" class="col-md-4">

            <!-- Product Image -->
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image">

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
