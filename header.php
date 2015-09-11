<?php

    require_once 'data/_data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Les Templates</title>
    <link rel="icon" type="image/x-icon" href="icon.gif" />
    <link href="fonts/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="css/bootstrap-3.1.1.min.css" rel="stylesheet">
    <link href="css/lollies.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!--[if lt IE 9]-->
    <script src="js/html5shiv-3.7.0.js"></script>
    <script src="js/respond-1.4.2.min.js"></script>
    <!--[endif]-->
</head>
<body>

<header id="main-header">
    <div class="container">
        <div class="row">

            <div class="col-md-6">
                <!-- LOGO -->
                <div id="logo" class="logo-l10"><a href="/"><img src="img/lestemplates_logo.png" /></a></div>
            </div>

            <div class="col-md-6 vert-nav-whole-10">
                <div class="navbar navbar-default" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav nav-justified">

                            <?php foreach(get_menu() as $menu => $menu_data){
                                echo '<li class="active"><a href="', $menu_data,'">', $menu,'</a></li>';
                            }  ?>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>