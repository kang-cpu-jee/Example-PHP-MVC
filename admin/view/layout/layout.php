<!DOCTYPE html>
<html>
    <head>
        <title>Training PHP</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="../vendor/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../assets/custom.js"></script>
        <link rel="stylesheet" href="../vendor/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/custom.css">
        <link rel="stylesheet" href="../vendor/fontawesome/css/all.css">
        <link rel="stylesheet" href="public/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@200;300;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <!-- start avigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <i class="far fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="index.php"><strong>SYSTEM</strong> MANAGEMENT</a>
                </div>
                <!-- end avigation -->
                <!-- start top menu -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fas fa-user-circle"></i> <strong>Hello!</strong> <?php if(isset($_SESSION["loged"])) echo $_SESSION["loged"]; ?>!<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="index.php?controller=users&act=profile"><i class="fas fa-user"></i> Profile</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="index.php?act=logout"><i class="fas fa-sign-out-alt"></i> Sign Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- end top menu -->
                <!-- start menu left -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav side-nav">
                        <li class="menu">
                            <a href="#"><i class="fas fa-folder-open"></i> Menu</a>
                        </li>
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#demo_dm"><i class="fas fa-address-book"></i> Accounts</a>
                            <ul id="demo_dm" class="collapse">
                                <li>
                                    <a href="index.php?controller=users&act=list">All Accounts</a>
                                </li>
                                <li>
                                    <a href="index.php?controller=users&act=add">Add New</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- end menu left -->

            <div id="page-wrapper">
                <div class="container-fluid">
                    <?php
                        $pathof_controller="";
                        if(isset($_GET["controller"])){
                            $pathof_controller="controller/controller_".$_GET["controller"].".php";
                            if(file_exists($pathof_controller))
                                include $pathof_controller;
                        }
                        else {
                            ?>
                            <h1>Welcome...</h1>
 
                            <p>Use the menu button at the top of the page to search for the category you want.</br>
                            <a href="index.php?controller=users&act=profile">My Account</a></p>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </body>
</html>