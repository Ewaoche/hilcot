<?php

$Pages = $Core->Pages();
$Blogs = $Core->Blogs(2);

$Cat1Pages = $Core->CatPages('cat1');
$Cat2Pages = $Core->CatPages('cat2');
$Cat3Pages = $Core->CatPages('cat3');

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="<?= domain ?>">
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?= $title ?></title>
    <meta property="og:title" content="<?= $title ?>" />


    <meta name="description" content="A spearheading organization in the Oil and Gas industry established to advance our oil well services, engineering consultancy, and supply of oil rig Equipments along with drilling consumables.">
    <meta property="og:description" content="A spearheading organization in the Oil and Gas industry established to advance our oil well services, engineering consultancy, and supply of oil rig Equipments along with drilling consumables." />

    <meta name="keywords" content="oil and gas, energy services, oil rigs, hilcot, petroleum, oil drills, pipelines nigeria, shell, nupeng">
    <meta property="og:keywords" content="oil and gas, energy services, oil rigs, hilcot, petroleum, oil drills, pipelines nigeria, shell, nupeng" />

    <meta name="author" content="golojan.com">
    <meta property="og:type" content="site" />
    <meta property="og:url" content="<?= domain ?>" />
    <meta property="og:image" content="<?= domain ?>templates/assets/images/seo.jpg" />
    <meta property="og:image:width" content="675" />
    <meta property="og:image:height" content="1000" />

    <!-- ==============================================
	Favicons
	=============================================== -->
    <link rel="shortcut icon" href="<?= $assets ?>images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="<?= $assets ?>images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $assets ?>images/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $assets ?>images/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $assets ?>images/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $assets ?>images/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $assets ?>images/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $assets ?>images/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $assets ?>images/apple-touch-icon-152x152.png" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $assets ?>images/apple-touch-icon-180x180.png" />

    <!-- ==============================================
	CSS VENDOR
	=============================================== -->
    <link rel="stylesheet" type="text/css" href="<?= $assets ?>css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?= $assets ?>css/vendor/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $assets ?>plugins/icofont/icofont.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $assets ?>css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $assets ?>css/vendor/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $assets ?>css/vendor/magnific-popup.css">

    <!-- Include stylesheet -->
    <link href="//cdn.quilljs.com/1.3.6/quill.core.css" rel="stylesheet">
    <!-- Theme included stylesheets -->
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <?= $Me->LoadHeader() ?>

    <!-- ==============================================
	Custom Stylesheet
	=============================================== -->
    <link rel="stylesheet" type="text/css" href="<?= $assets ?>css/style.css" />

    <script type="text/javascript" src="<?= $assets ?>js/vendor/modernizr.min.js"></script>

</head>

<body>

    <!-- Load page -->
    <div class="animationload">
        <div class="loader"></div>
    </div>

    <!-- BACK TO TOP SECTION -->
    <a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>


    <!-- HEADER -->
    <div class="header">
        <!-- TOPBAR -->
        <div class="topbar">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="topbar-left">
                            <div class="welcome-text editable" id="<?= "home-header-1" ?>" data-type="text"><?= $Core->get_cms("home-header-1", "We help the world growing since 1983") ?></div>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6">
                        <div class="topbar-right">
                            <ul class="topbar-menu">
                                <?php while ($tlink = mysqli_fetch_object($Cat1Pages)) : ?>
                                    <li><a href="/hilcot/info/<?= $tlink->slug ?>" title="Career"><?= $tlink->menutitle ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                            <ul class="topbar-sosmed">
                                <li>
                                    <a href="<?= $Core->getSiteInfo("Facebook-Link") ?>"><i class="icofont icofont-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="<?= $Core->getSiteInfo("Twitter-Link") ?>"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="<?= $Core->getSiteInfo("Instagram-Link") ?>"><i class="fa fa-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="<?= $Core->getSiteInfo("Pinterest-Link") ?>"><i class="fa fa-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- TOPBAR LOGO SECTION -->
        <div class="topbar-logo">
            <div class="container">


                <div class="contact-info">
                    <!-- INFO 1 -->
                    <div class="box-icon-1">
                        <div class="icon">
                            <div class="fa fa-envelope-o"></div>
                        </div>
                        <div class="body-content">
                            <div class="heading">Email Support</div><span class="editable" id="<?= "home-header-2" ?>" data-type="text"><?= $Core->get_cms("home-header-2", "info@petro.com") ?></span>
                        </div>
                    </div>
                    <!-- INFO 2 -->
                    <div class="box-icon-1">
                        <div class="icon">
                            <div class="fa fa-phone"></div>
                        </div>
                        <div class="body-content">
                            <div class="heading">Call Support</div><span class="editable" id="<?= "home-header-3" ?>" data-type="text"><?= $Core->get_cms("home-header-3", "+62 123 6700 411") ?></span>
                        </div>
                    </div>
                    <!-- INFO 3 -->
                    <a href="<?= $Core->getSiteInfo("Get-A-Quote-Link") ?>" class="btn btn-cta pull-right"><?= $Core->getSiteInfo("Get-A-Quote-Text") ?></a>

                </div>
            </div>
        </div>

        <!-- NAVBAR SECTION -->
        <div class="navbar navbar-main">

            <div class="container container-nav">
                <div class="rowe">

                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>

                    <a class="navbar-brand" href="/">
                        <img class="editable" id="<?= "home-footer-8" ?>" data-type="img" src="<?= $assets ?>images/logo.png" />
                    </a>

                    <nav class="navbar-collapse collapse">


                        <ul class="nav navbar-nav navbar-left">
                            <li class="active"><a href="/hilcot/">HOME</a></li>
                            <?php while ($page = mysqli_fetch_object($Cat2Pages)) : ?>
                                <?php 
                                    if ($Core->HasPages($page->id)) : 
                                    $SubPages = $Core->SubPages($page->id) ?>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?= $page->menutitle ?> <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                            <?php while ($subpage = mysqli_fetch_object($SubPages)) : ?>
                                                <li><a href="/hilcot/info/<?= $subpage->slug ?>"><?= strtoupper($subpage->menutitle) ?></a></li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </li>
                                <?php else : ?>
                                    <li><a href="/info/<?= $page->slug ?>" title="<?= $page->title ?>"><?= strtoupper($page->menutitle) ?></a></li>
                                <?php endif; ?>

                            <?php endwhile; ?>
                        </ul>



                        <ul class="nav navbar-nav navbar-right">
                            <?php if ($Me->auth) : ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ADMIN MENUS <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/hilcot/dashboard">Dashboard</a> </li>
                                        <li><a href="/hilcot/dashboard/pages">Pages</a> </li>
                                        <li><a href="/hilcot/dashboard/sliders">Slides</a> </li>
                                        <li><a href="/hilcot/dashboard/testimonies">Testimonies</a> </li>
                                        <li><a href="/hilcot/dashboard/settings">Settings</a> </li>
                                        <li><a href="/hilcot/auth/logout">Logout</a> </li>
                                    </ul>
                                </li>
                                <li><a href="/auth/logout" class="" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a></li>
                            <?php else : ?>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form class="navbar-form navbar-left" role="search" action="/hilcot/search" method="POST">
                                                <?= $Me->tokenize() ?>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="query" placeholder="Type and hit enter">
                                                </div>
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            <?php endif; ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>

    <?php if ($Me->auth) : ?>

        <?php if (isset($slug)) : ?>

            <div class="section banner-page about">
                <div class="container" style="padding-top: 80px;">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="title-page"><?= $title ?></div>
                            <ol class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li class="active"><?= $menutitle ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            <?php else :
            if (!isset($homepage)) :
            ?>

                <div class="section banner-page about">
                    <div class="container" style="padding-top: 80px;">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <div class="title-page">Admin Area</div>
                                <ol class="breadcrumb">
                                    <li><a href="/">Home</a></li>
                                    <li class="active">Admin</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


        <?php
            endif;
        endif; ?>
    <?php else : ?>
        <?php if (isset($slug)) : ?>
            <div class="section banner-page about">
                <div class="container" style="padding-top: 80px;">
                    <div class="row">
                        <div class="col-sm-12 col-md-12">
                            <div class="title-page"><?= $title ?></div>
                            <ol class="breadcrumb">
                                <li><a href="/">Home</a></li>
                                <li class="active"><?= $menutitle ?></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>