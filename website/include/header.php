<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Simplex-UI | <?php echo $titre;?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- favicon invocation -->
        <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/img/favicon.ico" type="image/x-icon">
        <!-- End favicon invocation -->
        <link rel="stylesheet" type="text/css" href="css/reset.css"> <!-- call reset css-->
        <link rel="stylesheet" type="text/css" href="css/main.css"> <!-- call main css (require) -->
        <link rel="stylesheet" type="text/css" href="css/col.css"> <!-- call colonne system (require)-->

        <link rel="stylesheet" type="text/css" href="demo.css"> <!-- Juste here for demo-->
    </head>
    <body class="blue"> <!-- Just apply color to body wich modify footer & navbar color : default, red, yellow, blue, green && -->

<!-- Page -->
    <div class="page *top-nav"> <!-- remove * before top-bar to enable fixed navbar on top -->
                <div class="header-container">
                <header class="wrapper clearfix">
                    <div class="brand">
                            <img src="img/brand.png"><h1>Simplex-UI</h1>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="/"><i class="fa fa-home"></i> Home</a></li>
                            <li><a href="/demo"><i class="fa fa-paw"></i> Demo</a></li>
                            <li><a><i class="fa fa-plus"></i> Tools</a>
                                <ul><!-- DropDown -->
                                    <li><a href="/download"><i class="fa fa-slark"></i> Download</a></li>
                                    <li><a href="/use"><i class="fa fa-slark"></i> How to use</a></li>
                                </ul><!-- End DropDown -->
                            </li>
                        </ul>


                    </nav>

                </header>
            </div>
        <?php if ($titre = "Demo") { echo '<div class="color-container">
                <a>Themes :</a><br>
                <span onclick="colors(\'blue\')" class="color-change blue"> </span>
                <span onclick="colors(\'red\')" class="color-change red"> </span>
                <span onclick="colors(\'green\')" class="color-change green"> </span>
                <span onclick="colors(\'yellow\')" class="color-change yellow"> </span>
                <span onclick="colors(\'default\')" class="color-change default"> </span><br>
                <a>Sidebar :</a><br>
                <span onclick="sidebar(\'sidebar left\')" class="lbl blue">Left</span> <span onclick="sidebar(\'sidebar right\')" class="lbl blue">Right</span><br>
                <a>Sticky Header:</a><br>
                <span onclick="navbar(\'page top-nav\')" class="lbl green">On</span> <span onclick="navbar(\'page *top-nav\')" class="lbl red">Off</span>

        </div>';} ?>