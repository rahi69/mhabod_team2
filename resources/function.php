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
//     $string3=htmlspecialchars($string2);
        $string3 = htmlentities($string2, ENT_COMPAT, 'UTF-8');

        return $string3;

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
    public function list_article()
    {
        $sql = "SELECT * FROM tbl_article";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            $list = <<<LISTARTICLE
          <tr>
          <td>{$row['title']}</td>
          <td>{$row['short_desc']}</td>
          <td><img src="img/{$row['image_src']}"width="100px"height="100px"/></td>
          <td>
          <a href="index.php?delete_article={$row['id_article']}" class="btn btn-danger">Delete</a>
          <a href="index.php?edit_article={$row['id_article']}" class="btn btn-info">Edit</a>
       
        
</td>
</tr>
LISTARTICLE;
            echo $list;

        }
    }

    public function get_article()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add'])) {

                if (empty($_POST['title']) || empty($_POST['short_desc']) || empty($_POST['description']) || empty($_POST['image']) || empty($_POST['status'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $title = $this->escape_string($_POST['title']);
                    $short_desc = $this->escape_string($_POST['short_desc']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($_POST['image']);
                    $status = $this->escape_string($_POST['status']);
                    $sql = "INSERT INTO tbl_article(title,short_desc,description,image_src,status) VALUES ('$title','$short_desc','$description','$image','$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);

                }
            }
        }
    }
    public function edit_article()
    {
        if(!isset($_SESSION))
        {
            session_start();
        }
        $id=$this->escape_string($_GET['edit_article']);
        $sql="SELECT * FROM tbl_article WHERE id_article = '{$id}'";
        $query=$this->query($sql);
        $this->confirm($query);
        $result =$this->fetch_array($query);
        return $result;

    }
    public function UpdateArticleById()
    {
        $id=$this->escape_string($_GET['edit_article']);
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit']) && is_numeric($id)) {
                    $title = $this->escape_string($_POST['title']);
                    $short_desc = $this->escape_string($_POST['short_desc']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($_POST['image']);
                    $status = $this->escape_string($_POST['status']);
                    $sql="UPDATE tbl_article SET title ='{$title}' ,short_desc = '{$short_desc}' ,image_src = '{$image}' ,description ='{$description}',status = '{$status}' WHERE id_article ='{$id}'";
                    $result=$this->query($sql);
//                    $this->confirm($result);
                    if($result)
                    {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
                else
                {
                    return false;
                }

            }

        }
    public function get_cat()
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
    public function button()
    {
        if($_SERVER["REQUEST_METHOD"]=="POST")
        {
            if(isset($_POST['Add_category']))
            {
                $this->redirect("add_cat.php");
            }
            elseif (isset($_POST['Add_video']))
            {
                $this->redirect("add_video.php");

            }
            elseif (isset($_POST['Admin_category']))
            {
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
                    <button>ویرایش</button></div>
  
VIDEO;
            echo $list;
        }
    }
    public function manage_gallery(){


        $sql = "SELECT * FROM tblgallery";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)){

            $gallery=<<<DELIMITER
<div class="SCard">
                <img class="Svideo" src=img/"{$row['image_url']}">
                <button>حذف</button><button>ویرایش</button>
            </div>
<div class="SCard">
                <video class="Svideo" src=img/"{$row['image_url']}">
                <button>حذف</button><button>ویرایش</button>
            </div>
DELIMITER;
            echo $gallery;
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


                    $sql = "INSERT INTO tbl_video (title,price,description,id_category,image_prev,video,status) VALUES ('$title','$price','$description','$cat_id','$image','$video','$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }
            }
        }
    }
    public function login()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
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
            if (isset($_POST['submit'])) {
                if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['rpassword']) || empty($_POST['email'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $username = $this->escape_string($_POST['username']);
                    $password1 = $this->escape_string($_POST['password']);
                    $password2 = $this->escape_string($_POST['rpassword']);
                    $email = $this->escape_string($_POST['email']);
                    // check if e-mail address syntax is valid
                    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                        echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Invalid email format </p>';
                        exit();
                    }
                    if (strlen($password1) <=6 || strlen($password2) <=6) {
                        echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Passwords arent strong enought</p>';
                        exit;
                    }

                    if ($password1 != $password2) {
                        echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Passwords not matched</p>';
                        exit;
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

