<div ng-app="myApp" class="menu-list">
    <ul id="menu-content" class="menu-content collapse out">

        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>
                <?php

                if(isset($_SESSION['username']) ){
                    echo $_SESSION['username'];
                } else {

//                        echo "unregistered user";
                }
                ?>

                <b class="caret"></b></a>
            <ul class="dropdown-menu">

                <li class="divider"></li>
                <li>
                    <a href="logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                </li>
            </ul>
        </li>

    </ul>
    <ul id="menu-content" class="menu-content collapse out">

        <li data-toggle="collapse" data-target="#ads" class="collapsed">
            <a class="list" href="index.php"><i class="fa fa-camera fa-lg"></i>صفحه اصلی </a>

        </li>

        <li data-toggle="collapse" data-target="#ads" class="collapsed">
            <a class="list" href="Managmant-Gallery.php"><i class="fa fa-camera fa-lg"></i> مدیریت گالری </a>

        </li>


        <li onclick="showArticle()" data-toggle="collapse" data-target="#service" class="collapsed">
            <a class="list" href="ManagmantArticle.php"> <i class="fa fa-newspaper-o"></i> مدیریت مقالات </a>

        </li>


        <li onclick="ShowEducation()" data-toggle="collapse" data-target="#new" class="collapsed">
            <a class="list" href="M.Education.php"><i class="fa fa-suitcase"></i> مدیریت آموزش </a>

        </li>


        <li data-toggle="collapse" data-target="#ads" class="collapsed">
            <a class="list()" href="aboutme.php"><i class="fa fa-black-tie fa-lg"></i> درباره من </a>

        </li>


        <li data-toggle="collapse" data-target="#ads" class="collapsed">
            <a class="list()" href="MyOrder.phpَ"><i class="fa fa-tty"></i> سفارشات</a>

        </li>

    </ul>



</div>