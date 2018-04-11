<?php include_once "../resources/config.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css" />
    <link rel="stylesheet" type="text/css" href="css/education2.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<body>
<div id="ManagementGallery">

<div id="myOverlay">
<!--  //مدیریت دسته بندی//-->
                            <div id="myOverlay" >
<!--                                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>-->
                                <div class="overlay-content">

                                    <div class="dropdown row col-xs-12 col-lg-12">
                                        <button class="dropbtn" name="dropBtn">دسته بندی</button>
                                        <div class="dropdown-content">
                                          <?php $function->manage_category();?>
                                        </div>
                                    </div>

                                    <h3 class="row col-lg-12 col-xs-12">دسته بندی لیست ها</h3>
                                    <form method="post">
                                    <ul class="row col-lg-12 col-xs-12">

                                        <?php
//                                        $function->manage_list_category();
                                        $sql = "SELECT * FROM tbl_category";
                                        $result = $function->query($sql);
                                        $function->confirm($result);
                                        while ($row = $function->fetch_array($result)) { ?>
                                            <li >

                                                <p > <?php echo $row['name_category'];?> </p >

                                                <input style="" type="text" name="cat_name">
                                                <a href="index.php?delete_cat=<?php echo $row['id_category'];?>">  <input type="submit" name="delete_cat" class="btn btn-primary btn-md" > حذف</a>
                                                <a href="index.php?delete_cat=<?php echo $row['id_category'];?>">  <input type="submit" name="delete_cat" class="btn btn-primary btn-md" > حذف</a>
                                                <a href="index.php?delete_cat=<?php echo $row['id_category'];?>">  <input type="submit" name="delete_cat" class="btn btn-primary btn-md" > حذف</a>
                                                <button class="btn btn-primary btn-md" > غیر فعال </button >
                                             </li >
                                        <?php } ?>

                                    </ul>
                                    </form>
                                </div>
                            </div>

            </ul>
        </form>
    </div>
</div>

</div>
</body>
</html>







<!--//مدیریت دسته بندی//-->
<!--            <div id="myOverlay" class="overlay">-->
<!--                <span class="closebtn" onclick="closeSearch()" title="Close Overlay">×</span>-->
<!--                <div class="overlay-content">-->
<!---->
<!--                    <div class="dropdown row col-xs-12 col-lg-12">-->
<!--                        <button class="dropbtn" name="dropBtn">دسته بندی</button>-->
<!--                        <div class="dropdown-content">-->
<!--                          --><?php //$function->manage_category();?>
<!--                        </div>-->
<!--                    </div>-->
<!---->
<!--                    <h3 class="row col-lg-12 col-xs-12">دسته بندی لیست ها</h3>-->
<!--                    <form method="post">-->
<!--                    <ul class="row col-lg-12 col-xs-12">-->
<!---->
<!--                        --><?php
//                        //$function->manage_list_category();
//                        $sql = "SELECT * FROM tbl_category";
//                        $result = $this->query($sql);
////                        $this->confirm($result);
////                        while ($row = $this->fetch_array($result)) { ?>
<!--<!--                            <li >-->-->
<!--<!--                                <!--          <a href="index.php?delete_cat=-->-->--><?php //////echo $row['id_category'];?><!--<!--<!--">  <input type="submit" name="delete_cat" class="btn btn-primary btn-md" > حذف</a>-->-->-->
<!--<!--                                <!--          -->-->--><?php //////$function->delete_cat();   ?>
<!--<!---->-->
<!--<!--                                <!--            <a href="index.php?edit_cat=-->-->--><?php //////echo $row['id_category'];?><!--<!--<!--&& edit_cat_name= -->-->--><?php //////echo $row['name_category'];?><!--<!--<!--">  <input type="submit" name="edit_cat" class="btn btn-primary btn-md" > ویرایش</a>-->-->-->
<!--<!--                                <!--                -->-->--><?php //////$function->edit_cat();   ?>
<!--<!--                                <!---->-->-->
<!--<!--                                <!--            <a href="index.php?off_cat=-->-->--><?php //////echo $row['id_category'];?><!--<!--<!--">  <button name="off_cat" class="btn btn-primary btn-md" > غیر فعال</button ></a>-->-->-->
<!--<!--                                <!--                -->-->--><?php //////$function->off_cat();   ?>
<!--<!--                                <!--<button class="btn btn-primary btn-md" > غیر فعال </button >-->-->-->
<!--<!--                                <p > -->--><?php ////echo $row['name_category'];?><!--<!-- </p >-->-->
<!--<!--                                <input style="" type="text" name="cat_name">-->-->
<!--<!--                            </li > -->-->
<!--                        --><?php ////} ?>
<!---->
<!--                    </ul>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </div>-->