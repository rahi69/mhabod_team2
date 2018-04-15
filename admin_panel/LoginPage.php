<?php require_once '../resources/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="Content/bootstrap.css" rel="stylesheet"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div>

            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div class="BackgroundOne"></div>
            <div class="BackgroundTwo"></div>
            <div class="BackgroundThree"><img src="img/UserPicture.jpg" class="UserPicture"></div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
            <div>
                <form method="post">
                    <div><input type="text" class="UserName" name="username" placeholder="User Name"></div>
                    <div><input type="password" class="PassWord" name="password" placeholder="Pass Word"></div>
                    <div class="LoginButtom" name="LoginButton">
                        <div class="Login"><input type="submit" name="LoginButton"
                                                  style="background: #54769f; border: none;" value="Login"></div>
                    </div>
                    <?php $function->login(); ?>
                </form>
                <br>
                <a href="signUp.php">
                    <div class="SignUpButtom">
                        <div class="Login" onclick="document.getElementById('id01').style.display='block'">Sign Up</div>
                    </div>
                </a>
                <div id="id01" class="modal">
                    <!--                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
                    <form class="modal-content" id="modal-content"
                          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                        <div class="container">
                            <h1>Sign Up</h1>
                            <p>Please fill in this form to create an account.</p>
                            <!--                            <p><span>-->
                            <?php //$function->display_message(); ?><!--</span></p>-->
                            <hr>
                            <label><b>Username</b></label>
                            <input type="text" placeholder="Enter Username" name="username" required><br>
                            <label><b>Email</b></label>
                            <input type="email" placeholder="Enter Email" name="email" required><br>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="password" required><br>

                            <label><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="re_password" required><br>

                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'"
                                        class="cancelbtn">Cancel
                                </button>
                                <button type="submit" class="signupbtn" id="signUpBtn" name="SignUp">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>
<script>
    <!--    --><?php //if((isset($_POST['SignUp']))){ ?>
    //    $(document).ready(function(){
    //        $("#signUpBtn").click(function(){
    //            $("#modal-content").addClass("modal-error");
    //        });
    //    });
    //    <?php //} else{ ?>
    //    $(document).ready(function(){
    //        $("#signUpBtn").click(function(){
    //            $("#modal-content").addClass("modal");
    //        });
    //    });
    //    <?php //} ?>

    function chng() {
        var ostan = document.getElementById("ostan").value;
        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                var shahr = '';

                for (i = 0; i < data.length; i++) {
                    shahr += '<option>' + data[i] + '</option>';
                }
                document.getElementById("city").innerHTML = shahr;
            }
        };
        xhr.open("POST", "ostanha.php", true);
        xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhr.send("ostan=" + ostan);
        return false;
    }
</script>
</body>
</html>