<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link href="Content/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="css/login.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
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
                <div><input type="text" class="UserName" placeholder="User Name"></div>
                <div><input type="text" class="PassWord" placeholder="Pass Word"></div>
                <a href="#"><div class="LoginButtom"><div class="Login">Login</div></div></a>
                <br>
                <a href="#"><div class="SignUpButtom"><div class="Login" onclick="document.getElementById('id01').style.display='block'">Sign Up</div></div></a>
                <div id="id01" class="modal">
<!--                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
                    <form class="modal-content">
                        <div class="container">
                            <h1>Sign Up</h1>
                            <p>Please fill in this form to create an account.</p>
                            <hr>
                            <label><b>Email</b></label>
                            <input type="text" placeholder="Enter Email" name="email" required><br>

                            <label><b>Password</b></label>
                            <input type="password" placeholder="Enter Password" name="psw" required><br>

                            <label><b>Repeat Password</b></label>
                            <input type="password" placeholder="Repeat Password" name="psw-repeat" required><br>

                            <label>
                                <input type="checkbox" checked="checked" name="remember"> Remember me
                            </label>
                            <div class="clearfix">
                                <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                                <button type="submit" class="signupbtn">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>

                <!--                <script>-->
                <!--                    // Get the modal-->
                <!--                    var modal = document.getElementById('id01');-->
                <!---->
                <!--                    // When the user clicks anywhere outside of the modal, close it-->
                <!--                    window.onclick = function(event) {-->
                <!--                        if (event.target == modal) {-->
                <!--                            modal.style.display = "none";-->
                <!--                        }-->
                <!--                    }-->
                <!--                </script>-->

            </div>
        </div>
    </div>
</div>
<script src="Scripts/jquery-1.9.1.min.js"></script>
<script src="Scripts/bootstrap.min.js"></script>

</body>
</html>