<?php
if(!isset($_SESSION))
{
    session_start();
}class functions
{
    public function set_message($msg)
    {
        if (!empty($msg))
            $_SESSION['message'] = $msg;
    }

    public function display_message()
    {
        if (isset($_SESSION['message'])) {
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        }
    }

    public function redirect($location)
    {
        header("Location: $location ");
    }

    public function query($sql)
    {
        global $connection;
        return $connection->query($sql);
    }

    public function confirm($result)
    {
        global $connection;
        if (!$result) {
            die("Query Failed " . $connection->error);
        }
    }

    public function fetch_array($result)
    {
        return $result->fetch_array();
    }

    public function escape_string($string)
    {
        global $connection;
        $string2 = $connection->real_escape_string($string);
        $string2 = htmlspecialchars($string2);
        $string2 = htmlentities($string2, ENT_COMPAT, 'UTF-8');
        $string2 = trim($string2);
        $string2 =stripslashes($string2);
        return $string2;

    }

    public function add_cat()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
                if (empty($_POST['name_cat'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $name_cat = $this->escape_string($_POST['name_cat']);
                    $sql = "INSERT INTO tbl_category(name_category) VALUES ('$name_cat')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }

            }
        }
    }

    public function manage_article()
    {
        $sql = "SELECT * FROM tbl_article";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            $list = <<<LISTARTICLE
               <li>
                    <a href="index.php?delete_article={$row['id_article']}" class="DeleteBox btn btn-primary">حذف</a>
                    &nbsp;&nbsp;&nbsp;<a href="edit_article.php?edit_article={$row['id_article']}" class="EditBox btn btn-primary">ویرایش</a><span class="nameTitle">{$row['title']}</span>&nbsp;&nbsp;
                    <span>{$row['short_desc']}</span>
                </li>
LISTARTICLE;
            echo $list;

        }
    }

    public function get_article()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add'])) {

                if (empty($_POST['title']) || empty($_POST['short_desc']) || empty($_POST['description']) || empty($_POST['image'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $title = $this->escape_string($_POST['title']);
                    $short_desc = $this->escape_string($_POST['short_desc']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($_POST['image']);
                  if(isset($_POST['status'])) $status = 1; else $status = 0;
                    $sql = "INSERT INTO tbl_article(title,short_desc,description,image_src,status) VALUES ('$title','$short_desc','$description','$image','$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);

                }
            }
        }
    }

    public function edit_article()
    {if(isset($_GET['edit_article'])){
        $id_edit_article = $this->escape_string($_GET['edit_article']);
        $sql = "SELECT * FROM tbl_article WHERE id_article = '{$id_edit_article}'";
        $query = $this->query($sql);
        $this->confirm($query);
        $result = $this->fetch_array($query);
        return $result;

    }}

    public function UpdateArticleById()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['update_article'])) {
                $id2 =$this->escape_string($_POST['id']);
                $title = $this->escape_string($_POST['title']);
                $short_desc = $this->escape_string($_POST['short_desc']);
                $description = $this->escape_string($_POST['description']);
                $image = $this->escape_string($_POST['image']);
                if(isset($_POST['status'])) $status = 1; else $status = 0;
              $sql = "UPDATE `tbl_article` SET `title`='".$title."' , `short_desc`= '".$short_desc."' , `image_src`= '".$image."' , `description`= '".$description."' , `status`= '".$status."' WHERE  id_article = '".$id2."' ";
//                $sql = "UPDATE `tbl_article` SET `title` = '".{$title}."' , short_desc = '{$short_desc}' ,image_src = '{$image}' ,description ='{$description}',status = '{$status}' WHERE id_article ='{$id}'";
                $query = $this->query($sql);
                    $this->confirm($query);

            } else {
                return false;
            }

        }

    }

    public function get_cat()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['mybtn'])) {
                if (empty($_POST['name_cat'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $name_cat = $this->escape_string($_POST['name_cat']);
                    $sql = "INSERT INTO tbl_category(name_category) VALUES ('$name_cat')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }

            }
        }
    }

    public function button()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add_category'])) {
                $this->redirect("add_cat.php");
            } elseif (isset($_POST['Add_video'])) {
                $this->redirect("add_video.php");

            } elseif (isset($_POST['Admin_category'])) {
                $this->redirect("list_cat.php");

            }
        }
    }
    public function manage_video()
    {
        $sql = "SELECT * FROM tbl_video";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            $list = <<<VIDEO
       <div class="CARDvideo">
                    <video poster="img/{$row['image_prev']}" class="XLvideo" controls><source src="upload/{$row['video']}" type="video/mp4"></video>
                    <a class="btn btn-danger" href="index.php?delete_video={$row['id_video']}">حذف</a>
                    <a class="btn btn-info" href="edit_video.php?edit_video={$row['id_video']}">ویرایش</a></div>
VIDEO;
            echo $list;
        }
    }

    public function manage_category(){
        $sql = "SELECT * FROM tbl_category";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)){
            $category = <<<DELIMITER
  <a href="#">{$row['name_category']}</a>
                          
DELIMITER;
            echo $category;
        }
    }
    public function manage_list_category(){
        $sql = "SELECT * FROM tbl_category";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            $list = <<<DELIMITER
            <li >
            <button class="btn btn-primary btn-md" > حذف</button ><button class="btn btn-primary btn-md" > ویرایش</button ><button class="btn btn-primary btn-md" > غیر فعال </button ><p > {$row['name_category']} </p >
            </li >
DELIMITER;
            echo $list;
        }
    }
    public function manage_gallery()
    {
        $sql = "SELECT * FROM tblgallery";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)){
//echo "<pre>";
//print_r($row);
//echo "</pre>";
            $gallery=<<<DELIMITER
<div class="SCard">
                <img class="Svideo" src=img/"{$row['image_url']}">
                <button> حذف</button><button>ویرایش</button>
            </div>
<div class="SCard">
                <video  class="XLvideo" controls><source src="upload/{$row['video_url']}" type="video/mp4"></video>
                <button>حذف</button><button>ویرایش</button>
            </div>
DELIMITER;
            return $gallery;
        }
    }

    public function add_gallery(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['ga_add'])) {
                if (empty($_POST['ga_title']) || empty($_POST['ga_remember']) || empty($_POST['ga_status'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else
                {
//                    print_r($_FILES['file']['name']);
//                    EXIT;
                    $image_file = $time = $video_prev =$pasvand = $type = $pasvand_prev = $video_file = $extention_prev = $extention =null;
                //
                    $hash = md5($_FILES['file']['name']. microtime()) . substr($_FILES['file']['name'],-5,5);
                    if(isset($_POST['ga_status'])) {$status = 1;} else{ $status = 0;}
                    $title = $this->escape_string($_POST['ga_title']);
                    $remember = $this->escape_string($_POST['ga_remember']);
                    if($remember == "picture") {
                        $pasvand = array("gif", "jpg", "jpeg", "PNG");
                        $type = 1;
                    }else if($remember == "video"){
                        $pasvand = array("mov", "avi", "mp4", "mp3");
                        $type = 2;
                        $hash_prev = md5($_FILES['prev_file']['name']. microtime()) . substr($_FILES['prev_file']['name'],-5,5);
                        $pasvand_prev = array("gif", "jpg", "jpeg", "PNG");
                        $fileExtention_prev = explode("." ,$_FILES['prev_file']['name']);
                        $extention_prev = end($fileExtention_prev);
                        if (in_array("$extention_prev" , $pasvand_prev) && ($_FILES['prev_file']['size']<=20971520)){
                            if(move_uploaded_file($_FILES["prev_file"]["tmp_name"] , 'upload/'.$hash_prev)) {
                            if ($_FILES["file"]["error"] == 0) {
                                echo "<div class='msg'>file uploaded successfully</div>";

                            } else {
                                echo "<div class='msg'>cannot  uploaded </div>";
                            }
                        }
                        }
                    }
                        $fileExtention = explode("." ,$_FILES['file']['name']);
                        $extention = end($fileExtention);
                        if (in_array("$extention" , $pasvand) && ($_FILES['file']['size']<=20971520))
                        {
                            if(move_uploaded_file($_FILES["file"]["tmp_name"] , 'upload/'.$hash)) {
                                if ($_FILES["file"]["error"] == 0) {
                                    echo "<div class='msg'>file uploaded successfully</div>";
                                    $time = date('Y/m/d/ H:i:s');
                                } else {
                                    echo "<div class='msg'>cannot  uploaded </div>";
                                }
                            }
                        else
                        {
                            echo "<div class='msg'>can upload file with picture or video format </div>";
                        }
                    }
                   if($type == 1){
                       $image_file = $this->escape_string($_FILES['file']['name']);
                       $video_file = null;
                       $video_prev = null;
                   }else if($type ==2){
                       $video_file = $this->escape_string($_FILES['file']['name']);
                       $video_prev = $this->escape_string($_FILES['prev_file']['name']);
                       $image_file =null;
                   }
                    $sql = "INSERT INTO `tblgallery` (`id_gallery`, `title`, `image_url`, `status`, `type`, `video_url`, `prev_url`, `date`) VALUES (NULL,'$title','$image_file','$status','$type','$video_file', ' $video_prev','$time')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }
            }
        }
    }

    public function edit_gallery()
        {
            if (isset($_GET['edit_gallery'])) {
                $id_edit_gallery = $this->escape_string($_GET['edit_gallery']);
                $sql = "SELECT * FROM tbl_article WHERE id_article = '{$id_edit_gallery}'";
                $query = $this->query($sql);
                $this->confirm($query);
                $result = $this->fetch_array($query);
                return $result;
            }
        }

        public function UpdateGalleryByID(){
            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                if (isset($_POST['update_gallery'])) {
                    $id2 =$this->escape_string($_POST['id']);
                    $title = $this->escape_string($_POST['title']);
                    $short_desc = $this->escape_string($_POST['short_desc']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($_POST['image']);
                    if(isset($_POST['status'])) $status = 1; else $status = 0;
                    $sql = "UPDATE `tbl_article` SET `title`='".$title."' , `short_desc`= '".$short_desc."' , `image_src`= '".$image."' , `description`= '".$description."' , `status`= '".$status."' WHERE  id_article = '".$id2."' ";
//                $sql = "UPDATE `tbl_article` SET `title` = '".{$title}."' , short_desc = '{$short_desc}' ,image_src = '{$image}' ,description ='{$description}',status = '{$status}' WHERE id_article ='{$id}'";
                    $query = $this->query($sql);
                    $this->confirm($query);

                } else {
                    return false;
                }

            }
        }

    public function list_video()
    {
        $sql="SELECT * FROM tbl_video";
        $result=$this->query($sql);
        $this->confirm($result);
        while ($row=$this->fetch_array($result))
        {
            $list=<<<VIDEO
            <div id="film">
            <!--<ul id ="list-group" class="list-group">-->
               <div class="item"  href="#">
                <video width="200" height="100"  controls>
            <ul id="video" class="list-group">
                <div  class="item"  href="#"><video  width="200" height="100"  controls>
                        <source src="upload/{$row['video']}" type="video/mp4">
                    </video></div>
                    <div><a class="btn btn-danger" href="index.php?delete_video={$row['id_video']}">delete</a></div>
                   
            </ul>
VIDEO;
            echo $list;

        }
    }
    public function filter_list_video()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['search_cat'])) {
                $CatId = $this->escape_string($_POST['category']);
                $sql = "SELECT tbl_video.video,tbl_video.id_video ,tbl_category.name_category FROM tbl_video LEFT OUTER JOIN tbl_category ON 
                                          tbl_video.id_category = tbl_category.id_category WHERE tbl_video.id_category = '{$CatId}'";
                $result = $this->query($sql);
                $this->confirm($result);
                while ($row = $this->fetch_array($result)) {
                    $list = <<<LIST
            <ul class="list-group">
                <div class="item"  href="#"><video width="200" height="100"  controls>
                        <source src="upload/{$row['video']}" type="video/mp4">
                    </video></div>
                    <div><a class="btn btn-danger" href="index.php?delete_video={$row['id_video']}">delete</a></div>
            </ul>
LIST;
                    echo $list;
                }
            }
        }
    }
    public function get_video()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add'])) {
                if (empty($_POST['title']) || empty($_POST['price']) || empty($_POST['description'])
                    || empty($_POST['image']) || empty($_POST['video']) || empty($_POST['status'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $cat_id = $_POST['category'];
                    $title = $this->escape_string($_POST['title']);
                    $price = $this->escape_string($_POST['price']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($_POST['image']);
                    $video = $this->escape_string($_POST['video']);
                    $status = $this->escape_string($_POST['status']);
                    $time = date("Y-m-d G:i:s<br>", time()); ;


                    $sql = "INSERT INTO tbl_video (title,price,`date`,description,id_category,image_prev,video,status) VALUES ('$title','$price','$time','$description','$cat_id','$image','$video','$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }
            }
        }
    }
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['LoginButton'])) {
                if (empty($_POST['username']) || empty($_POST['password'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $username = $this->escape_string($_POST['username']);
                    $password =sha1($this->escape_string($_POST['password']));
                    $sql = "SELECT * FROM admin WHERE username='{$username}' AND password ='{$password}'";
                    $result = $this->query($sql);
                    $this->confirm($result);
                    if ($result->num_rows == 0) {
                        $this->set_message("Your username or password is wrong.");
                        $this->redirect("login.php");
                    } else {
                        $_SESSION['username'] = $username;

                        $this->redirect("index.php");
                    }
                }
            }
        }
    }
    public function sign_up()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['SignUp'])) {
                if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['re_password']) || empty($_POST['email'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                    $this->set_message("Please fill all fields ");
                    echo $_SESSION['message'];exit();
                } else {
                    $username = $this->escape_string($_POST['username']);
                    $password1 = $this->escape_string($_POST['password']);
                    $password2 = $this->escape_string($_POST['re_password']);
                    $email = $this->escape_string($_POST['email']);
                    // check if e-mail address syntax is valid
                    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                        echo '<p style="background-color: #ac2925;color: black ;text-align: center"> Invalid email format </p>';
                        $this->set_message("Invalid email format");
                        echo $_SESSION['message'];exit();
                    }
                    if ($password1 != $password2) {
                        echo '<p style="background-color: #ac2925;color: black ;text-align: center"> Passwords not matched</p>';
                        $this->set_message("Passwords not matched");
                        echo $_SESSION['message'];exit;
                    }
                    if (strlen($password1) <= 6 || strlen($password2) <= 6) {
                        echo '<p style="background-color: #ac2925;color: black ;text-align: center"> Passwords arent strong enought</p>';
                        $this->set_message("Passwords aren't strong enough");
                        echo $_SESSION['message'];exit;
                    }
                    //checking email unique
                    $query = "SELECT * FROM admin WHERE email =" . $email;
                    $emailCheck = $this->query($query);
                    $this->confirm($emailCheck);
                    $row = $this->fetch_array($emailCheck);
                    $numRow =mysqli_num_rows( $row);
                    if($numRow>0){
                        echo '<p style="background-color: #ac2925;color: black ;text-align: center"> you have an account with this email</p>';
                        $this->set_message("you have an account with this email");
                        echo $_SESSION['message'];
                        exit();
                    }
                    $hashedPassword = sha1($password1);
                    $sql = "INSERT INTO admin (username,password,email) VALUES ('$username','$hashedPassword','$email')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }
            }
        }
    }
}
$function=new functions();

