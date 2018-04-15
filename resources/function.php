<?php
if (!isset($_SESSION)) {
    session_start();
}

class functions
{
    public $video_url;
    public $_url;
    private $hash_video;
    private $hash_image;
    const file_size_max = 2147483648;

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
//        return $connection->query($sql);
//        $result
        return $connection->query($sql);
//        if (!$result) {
//            echo "Query Failed " . mysqli_error($connection);
//            exit();
//        }

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
        $string2 = stripslashes($string2);
        return $string2;

    }

// ******* About Us functions ********//

    public function about_me()
    {


        //  if(isset($_POST['upload']))
        if (isset($_POST['ab_save'])) {
            $hash = md5($_FILES['file']['name'] . microtime()) . substr($_FILES['file']['name'], -5, 5);
            $pasvand = array("ogg", "mp4");
            //array("gif" , "jpg" , "jpeg" ,"PNG");
            $fileExtention = explode(".", $_FILES['file']['name']);
            $extention = end($fileExtention);
            if (in_array("$extention", $pasvand) && ($_FILES['file']['size'] <= self::file_size_max)) {
                if (move_uploaded_file($_FILES["file"]["tmp_name"], '../admin_panel/upload/' . $hash)) {
                    if ($_FILES["file"]["error"] == 0) {
                        echo "<div class='msg'>file uploaded successfully</div>";
                        $this->video_url = $hash;

                    } else {
                        echo "<div class='msg'>cannot uploaded </div>";
                    }
                }
            } else {
                echo "<div class='msg'>can upload file with . ogg -mp4</div>";
            }
            $video_url = $this->video_url;
            if (empty($_POST['description'])) {
                $this->set_message("لطفا متن مربوطه را وارد نمایید");
            } else {
                $description = $this->escape_string($_POST['description']);
                $query = "SELECT * FROM tbl_aboutme";
                $result = $this->query($query);
                $this->confirm($result);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    $sql = "UPDATE `tbl_aboutme` SET `biog` ='" . $description . "' , `video_url` = '" . $video_url . "'";
                    $result2 = $this->query($sql);
                    $this->confirm($result2);

                    $this->set_message('متن شما با موفقیت ویرایش شد');
                } else {
                    $sql = "INSERT INTO `tbl_aboutme`(`biog`,`video_url`) VALUES ('$description','$video_url')";
                    $result2 = $this->query($sql);
                    $this->confirm($result2);
                    $this->set_message('متن شما با موفقیت ثبت شد');
                }
            }
        }
    }

    public function social_network()
    {
        if (isset($_POST['social'])) {
            if (empty($_POST['facebook']) && empty($_POST['pinterest']) && empty($_POST['google_plus']) && empty($_POST['instagram']) && empty($_POST['linkedin']) &&
                empty($_POST['skype']) && empty($_POST['telegram']) && empty($_POST['twitter']) && empty($_POST['whatsapp']) && empty($_POST['youtube'])
                && empty($_POST['telephone']) && empty($_POST['email'])) {
                $this->set_message("کاربر گرامی حداقل یکی از موارد زیر را کامل نمایید.");
            } else {
                if (isset($_POST['facebook']))
                    $facebook = $_POST['facebook'];
                if (isset($_POST['pinterest']))
                    $pinterest = $_POST['pinterest'];
                if (isset($_POST['google_plus']))
                    $google_plus = $_POST['google_plus'];
                if (isset($_POST['instagram']))
                    $instagram = $_POST['instagram'];
                if (isset($_POST['linkedin']))
                    $linkedin = $_POST['linkedin'];
                if (isset($_POST['skype']))
                    $skype = $_POST['skype'];
                if (isset($_POST['telegram']))
                    $telegram = $_POST['telegram'];
                if (isset($_POST['twitter']))
                    $twitter = $_POST['twitter'];
                if (isset($_POST['whatsapp']))
                    $whatsapp = $_POST['whatsapp'];
                if (isset($_POST['youtube']))
                    $youtube = $_POST['youtube'];
                if (isset($_POST['telephone']))
                    $telephone = $_POST['telephone'];
                if (isset($_POST['email']))
                    $email = $_POST['email'];
                $json = array(
                    'whatsapp' => $_POST['whatsapp'],
                    'facebook' => $_POST['facebook'],
                    'pinterest' => $_POST['pinterest'],
                    'google_plus' => $_POST['google_plus'],
                    'instagram' => $_POST['instagram'],
                    'linkedin' => $_POST['linkedin'],
                    'skype' => $_POST['skype'],
                    'telegram' => $_POST['telegram'],
                    'twitter' => $_POST['twitter'],
                    'youtube' => $_POST['youtube'],
                    'telephone' => $_POST['telephone'],
                    'email' => $_POST['email'],
                );
                $json_encode = json_encode($json);
                $sql = "SELECT * FROM social-network";
                $result = $this->query($sql);
                $this->confirm($result);
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    $sql = "UPDATE `social-network` SET `facebook` ='" . $facebook . "' , `pinterest` ='" . $pinterest . "' , `google_plus` ='" . $google_plus . "' 
                 , `instagram` ='" . $instagram . "' , `linkedin` ='" . $linkedin . "' , `skype` ='" . $skype . "' , `telegram` ='" . $telegram . "' 
                 , `twitter` ='" . $twitter . "' , `whatsapp` ='" . $whatsapp . "' , `youtube` ='" . $youtube . "' , `telephone` ='" . $telephone . "' , `email` ='" . $email . "','" . $json_encode . "' ";
                    $result2 = $this->query($sql);
                    $this->confirm($result2);
                    $this->set_message('متن شما با موفقیت ویرایش شد.');
                } elseif ($rowCount == 0) {
                    $sql = "INSERT INTO `social-network`(`id`, `facebook`, `pinterest`, `google_plus`, `instagram`, `linkedin`, `skype`, `telegram`, `twitter`, `whatsapp`, `youtube`, `telephone`, `email`, `json`) VALUES
                                                      ('null','$facebook','$pinterest','$google_plus','$instagram','$linkedin','$skype','$telegram','$twitter','$whatsapp','$youtube','$telephone','$email','$json')";
                    $result2 = $this->query($sql);
                    $this->confirm($result2);
                    $this->set_message('متن شما با موفقیت ثبت شد.');
                }
            }
        }
    }

    /* manage function upload.................................................... */
    public function upload($file, $suffix = array())
    {
        $hash = md5($file['name'] . microtime()) . substr($file['name'], -5, 5);
        $pasvand = $suffix;
//    array("ogg" , "mp4");
//    array("gif" , "jpg" , "jpeg" ,"PNG");
        $fileExtention = explode(".", $file['name']);
        $extention = end($fileExtention);
        if (in_array("$extention", $pasvand) && ($file['size'] <= self::file_size_max)) {
            if (move_uploaded_file($file["tmp_name"], '../admin_panel/upload/' . $hash)) {
                if ($file["error"] == 0) {
                    echo "<div class='msg'>file uploaded successfully</div>";
                    $this->_url = $hash;

                } else {
                    echo "<div class='msg'>cannot uploaded </div>";
                }
            }
        } else {
            echo "<div class='msg'>can upload file</div>";
        }
    }


    /* manage article.................................................... */
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

    public function add_article()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add'])) {
                if (empty($_POST['title']) || empty($_POST['short_desc']) || empty($_POST['description'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $this->upload($_FILES['file'], array("gif", "jpg", "jpeg", "PNG"));
                    $title = $this->escape_string($_POST['title']);
                    $short_desc = $this->escape_string($_POST['short_desc']);
                    $description = $this->escape_string($_POST['description']);
                    $image = $this->escape_string($this->_url);
                    //$image = $this->escape_string($_FILES['image']['name']);
                    if (isset($_POST['status'])) $status = 1; else $status = 0;
                    $sql = "INSERT INTO tbl_article(title,short_desc,description,image_src,status) VALUES ('$title','$short_desc','$description','$image','$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }
            }

        }
    }


    public function edit_article()
    {
        if (isset($_GET['edit_article'])) {
            $id_edit_article = $this->escape_string($_GET['edit_article']);
            $sql = "SELECT * FROM tbl_article WHERE id_article = '{$id_edit_article}'";
            $query = $this->query($sql);
            $this->confirm($query);
            $result = $this->fetch_array($query);
            return $result;

        }
    }

    public function UpdateArticleById()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['update_article'])) {
                $id2 = $this->escape_string($_POST['id']);
                $title = $this->escape_string($_POST['title']);
                $short_desc = $this->escape_string($_POST['short_desc']);
                $description = $this->escape_string($_POST['description']);
                $image = $this->escape_string($_POST['image']);
                if (isset($_POST['status'])) $status = 1; else $status = 0;
                $sql = "UPDATE `tbl_article` SET `title`='" . $title . "' , `short_desc`= '" . $short_desc . "' , `image_src`= '" . $image . "' , `description`= '" . $description . "' , `status`= '" . $status . "' WHERE  id_article = '" . $id2 . "' ";
//                $sql = "UPDATE `tbl_article` SET `title` = '".{$title}."' , short_desc = '{$short_desc}' ,image_src = '{$image}' ,description ='{$description}',status = '{$status}' WHERE id_article ='{$id}'";
                $query = $this->query($sql);
                $this->confirm($query);
                $this->redirect("ManagmantArticle.php");

            } else {
                return false;
            }
        }

    }

    /* manage gallery.................................................... */

    public function manage_gallery()
    {
        $sql = "SELECT * FROM tblgallery";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
//            echo "<pre>";
//            print_r($row);
//            echo "</pre>";

            if ($row['type'] == 1) {
                $gallery = <<<DELIMITER
<div class="SCard">
                <img class="Svideo" src="upload/{$row['image_url']}">
               <a href="index.php?delete_gallery={$row['id_gallery']}"><button>حذف</button></a><a href="edit_gallery.php?edit_gallery={$row['id_gallery']}" style="display: inline;"><button>ویرایش</button></a>
            </div>

DELIMITER;
                echo $gallery;
            } elseif ($row['type'] == 2) {
                $video = <<<DELIMITER
<div class="SCard">
                <video  class="XLvideo" controls><source src="upload/{$row['video_url']}" type="video/mp4"></video>
                <a href="index.php?delete_gallery={$row['id_gallery']}"><button>حذف</button></a><a href="edit_gallery.php?edit_gallery={$row['id_gallery']}" style="display: inline;"><button>ویرایش</button></a>
            </div>
DELIMITER;
                echo $video;
            }
        }
    }

    public function add_gallery()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['ga_add'])) {
                if (empty($_POST['ga_title']) || empty($_POST['ga_remember']) || empty($_POST['ga_status'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $time = date('Y/m/d/ H:i:s');
                    $title = $_POST['ga_title'];
                    $check = $_POST['ga_remember'];
                    if (isset($_POST['ga_status'])) $status = 1; else $status = 0;
                    if ($check == "picture") {
                        $type = 1;
                        $this->upload($_FILES['file'], array("gif", "jpg", "jpeg", "PNG"));
                        $image_file = $this->_url;
                        $video_file = null;
                        $video_prev = null;


                    } elseif ($check == "video") {
                        $type = 2;
                        // $video_file = $this->escape_string($_FILES['file']['name']);
                        $this->upload($_FILES['file'], array("ogg", "mp4"));
                        $video_file = $this->_url;
                        // $video_prev = $this->escape_string($_FILES['prev_file']['name']);
                        $this->upload($_FILES['prev_file'], array("gif", "jpg", "jpeg", "PNG"));
                        $video_prev = $this->_url;
                        $image_file = null;
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
            $sql = "SELECT * FROM tblgallery WHERE id_gallery = '{$id_edit_gallery}'";
            $query = $this->query($sql);
            $this->confirm($query);
            $result = $this->fetch_array($query);
            return $result;

        }
    }

    public function UpdateGalleryByID()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['UpdateGallery'])) {
                $id2 = $this->escape_string($_POST['id']);
                $title = $this->escape_string($_POST['title']);
                $time = date("Y-m-d G:i:s<br>", time());
                if (isset($_POST['status'])) $status = 1; else $status = 0;
//                $sql = "UPDATE `tbl_article` SET `title`='" . $title . "' , `short_desc`= '"  . "' , `image_src`= '"  . "' , `description`= '" . "' , `status`= '" . $status . "' WHERE  id_article = '" . $id2 . "' ";
//
//                $sql = "UPDATE `tbl_article` SET `title` = '".{$title}."' , short_desc = '{$short_desc}' ,image_src = '{$image}' ,description ='{$description}',status = '{$status}' WHERE id_article ='{$id}'";
                $sql = "UPDATE `tblgallery` SET `title`='" . $title . "',`status`='" . $status . "',`date`='" . $time . "' WHERE id_gallery = '" . $id2 . "'";
                $query = $this->query($sql);
                $this->confirm($query);
                $this->redirect("Managmant-Gallery.php");
            } else {
                return false;
            }
        }
    }

    /* manage video.................................................... */

    public function manage_video()
    {
        $sql = "SELECT * FROM tbl_video";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            $list = <<<VIDEO
       <div class="CARDvideo">
                    <video poster="upload/{$row['image_prev']}" class="XLvideo" controls><source src="upload/{$row['video']}" type="video/mp4"></video>
                    <a class="btn btn-danger" href="index.php?delete_video={$row['id_video']}">حذف</a>
                    <a class="btn btn-info" href="edit_video.php?edit_video={$row['id_video']}">ویرایش</a></div>
VIDEO;
            echo $list;
        }
    }

    public function add_video()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['Add'])) {
                if (empty($_POST['title']) || empty($_POST['price']) || empty($_POST['description'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $this->upload($_FILES['image'], array("gif", "jpg", "jpeg", "PNG"));
                    $image = $this->_url;
                    $this->upload($_FILES['video'], array("ogg", "mp4"));
                    $video = $this->_url;

                    $cat_id = $_POST['category'];
                    $title = $this->escape_string($_POST['title']);
                    $price = $this->escape_string($_POST['price']);
                    $description = $this->escape_string($_POST['description']);
                    $status = $this->escape_string($_POST['status']);
                    $time = date("Y-m-d G:i:s<br>", time());
                    $sql = "INSERT INTO tbl_video (title,price,`date`,description,id_category,image_prev,video,status) VALUES ('$title','$price','$time','$description','$cat_id','$image','$video' ,'$status')";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }
            }
        }
    }

    public function edit_video()
    {
        if (isset($_GET['edit_video'])) {
            $id_edit_video = $this->escape_string($_GET['edit_video']);
            $sql = "SELECT * FROM tbl_video WHERE id_video = '{$id_edit_video}'";
            $query = $this->query($sql);
            $this->confirm($query);
            $result = $this->fetch_array($query);
            return $result;

        }
    }

    public function UpdateVideoById()
    {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['update_video'])) {
                $id2 = $this->escape_string($_POST['id']);
                $title = $this->escape_string($_POST['title']);
                $price = $this->escape_string($_POST['price']);
                $description = $this->escape_string($_POST['description']);
//                $video = $this->escape_string($_POST['video']);
//                $image = $this->escape_string($_POST['image']);
                if (isset($_POST['status'])) $status = 1; else $status = 0;
                $sql = "UPDATE `tbl_video` SET `title`='" . $title . "' , `description`= '" . $description . "' , `price`= '" . $price . "'  , `status`= '" . $status . "'  WHERE  id_video = '" . $id2 . "' ";
//                $sql = "UPDATE tbl_video SET title = '{$title}' , description = '{$description}' ,price = '{$price}' ,status ='{$status}', image_prev = '{$image}' , video = '{$video}' WHERE id_video ='{$id2}'";
                $query = $this->query($sql);
                $this->confirm($query);
                $this->redirect("M.Education.php");


            } else {
                return false;
            }

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

    /* manage category.................................................... */

    public function manage_category()
    {
        $sql = "SELECT * FROM tbl_category WHERE `status`=1";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            $category = <<<DELIMITER
  <a href="#">{$row['name_category']}</a>
                          
DELIMITER;
            echo $category;
        }
    }

    public function add_cat()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submit'])) {
                if (empty($_POST['name_cat'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';

                } else {
                    $name_cat = $this->escape_string($_POST['name_cat']);
                    $status = 1;
                    $sql = "INSERT INTO tbl_category(name_category,status) VALUES ('$name_cat',$status)";
                    $result = $this->query($sql);
                    $this->confirm($result);
                }

            }
        }
    }

    public function manage_list_category()
    {
        $sql = "SELECT * FROM tbl_category";
        $result = $this->query($sql);
        $this->confirm($result);
        while ($row = $this->fetch_array($result)) {
            if ($row['status'] == 1) {
                $list = <<<DELIMITER

            <li style="list-style-type: none">
            
          <a href="index.php?delete_cat={$row['id_category']}" class="btn btn-primary DeleteBox">
           <span>حذف</span>
           </a>  
  
        <a href="index.php?on_cat={$row['id_category']}" class=" btn btn-primary"> 
          <span>فعال</span>  
           </a>
            
           <a href="index.php?off_cat={$row['id_category']}"  class=" btn btn-primary">
            <span>غیرفعال</span>
           </a>
           
             <p class="pOn" style="float:right;width:50%; margin:0px;"> {$row['name_category']} </p >
             <br>
             <br>
            
            
            
 
              <!--<input style="float: right;" type="text" name="cat_name">-->
            </li >     
            
           

DELIMITER;
                echo $list;
        }
        elseif($row['status'] == 0)
             {
                $list = <<<DELIMITER

            <li style="list-style-type: none">
            
          <a href="index.php?delete_cat={$row['id_category']}" class="btn btn-primary DeleteBox">
           <span>حذف</span>
           </a>
  
        <a href="index.php?on_cat={$row['id_category']}" class=" btn btn-primary"> 
          <span>فعال</span>  
           </a>
            
           <a href="index.php?off_cat={$row['id_category']}"  class=" btn btn-primary">
            <span>غیرفعال</span>
           </a>
           
             <p class="pOff" style="float:right;width:50%; margin:0px;"> {$row['name_category']} </p >
             <br>
             <br>
            
 
              <!--<input style="float: right;" type="text" name="cat_name">-->
            </li >     
            
           

DELIMITER;
                echo $list;
            }
    }

    }


    /* upload files.................................................... */
    public function delete_cat()
    {
        if (isset($_POST['delete_cat'])) {
            $id = $this->escape_string($_GET['delete_cat']);
            $sql = "DELETE FROM tbl_category WHERE id_category={$id}";
            $result = $this->query($sql);
            $this->confirm($result);
        }

    }

    public function edit_cat()
    {
        if (isset($_POST['delete_cat'])) {
            $id = $this->escape_string($_GET['delete_cat']);
            $edit_cat_name = $this->escape_string($_GET['edit_cat_name']);
            $sql = "UPDATE `tbl_category` SET `name_category`= '{$edit_cat_name}' WHERE `id_category`= '{$id}'";
            $result = $this->query($sql);
            $this->confirm($result);
        }
    }

    public function off_cat()
    {
        if (isset($_POST['delete_cat'])) {
            $id = $this->escape_string($_GET['delete_cat']);
            $status_off = 0;
            $sql = "UPDATE `tbl_category` SET `status`= '{$status_off}' WHERE `id_category`= '{$id}'";
            $result = $this->query($sql);
            $this->confirm($result);
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
                    $password = sha1($this->escape_string($_POST['password']));
                    $sql = "SELECT * FROM admin WHERE username='{$username}' AND password ='{$password}'";
                    $result = $this->query($sql);
//                    $this->confirm($result);
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
    /* register .................................................... */

//    public function sign_up()
//    {
//        if ($_SERVER["REQUEST_METHOD"] == "POST") {
//            if (isset($_POST['SignUp'])) {
//                if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['re_password']) || empty($_POST['email'])) {
//                    //  echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
//                    $this->set_message("Please fill all fields ");
//
//                } else {
//                    $username = $this->escape_string($_POST['username']);
//                    $password1 = $this->escape_string($_POST['password']);
//                    $password2 = $this->escape_string($_POST['re_password']);
//                    $email = $_POST['email'];
//                    // check if e-mail address syntax is valid
//                    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//                        //   echo '<p style="background-color: #ac2925;color: black ;text-align: center"> Invalid email format </p>';
//                        $this->set_message("Invalid email format");
//                    } elseif ($password1 != $password2) {
//                        //   echo '<p style="background-color: #ac2925;color: black ;text-align: center"> Passwords not matched</p>';
//                        $this->set_message("Passwords not matched");
//
//                    } elseif (strlen($password1) < 6 || strlen($password2) < 6) {
//                        // echo '<p style="background-color: #ac2925;color: black ;text-align: center"> Passwords arent strong enought</p>';
//                        $this->set_message("Passwords aren't strong enough");
//                    } else {
//                        //checking email unique
//                        $query = "SELECT * FROM admin WHERE email =$email";
//                        $emailCheck = $this->query($query);
//                        $this->confirm($emailCheck);
//                        $row = $this->fetch_array($emailCheck);
//                        $numRow = mysqli_num_rows($row);
//                        if ($numRow > 0) {
//                            // echo '<p style="background-color: #ac2925;color: black ;text-align: center"> you have an account with this email</p>';
//                            $this->set_message("you have an account with this email");
//                            // echo $_SESSION['message'];
//                            exit();
//                        } elseif ($numRow == 0) {
//                            $status = 0;
//                            $hashedPassword = sha1($password1);
//                            //$sql = "INSERT INTO admin (username,password,email) VALUES ('$username','$hashedPassword','$email')";
//                            $sql = "INSERT INTO `admin`( `username`, `email`, `password`, `status`) VALUES ('$username','$email','$hashedPassword','$status')";
//                            $result = $this->query($sql);
//                            $this->confirm($result);
//                        }
//                    }
//                }
//            }
//
//        }
    // }


    public function sign_up()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['SignUp'])) {
                if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['re_password']) || empty($_POST['email'])) {
                    echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Please fill all fields </p>';
                } else {
                    $username = $this->escape_string($_POST['username']);
                    $password1 = $this->escape_string($_POST['password']);
                    $password2 = $this->escape_string($_POST['re_password']);
                    $email = $this->escape_string($_POST['email']);
                    // check if e-mail address syntax is valid
                    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email)) {
                        echo '<p style="background-color: #ac2925;color: white ;text-align: center"> Invalid email format </p>';
                        exit();
                    }
                    if (strlen($password1) <= 6 || strlen($password2) <= 6) {
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

$function = new functions();

