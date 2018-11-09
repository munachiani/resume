<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <title>Resume / CV HTML5 Template</title>

    <!-- StyleSheets -->
    <link rel="stylesheet" href="{{url('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{url('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css') }}">

    <!-- FontsOnline -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <!-- JavaScripts -->
    <script src="js/vendors/modernizr.js"></script>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <body>

        <!-- Page Wrapper -->
        <div id="wrap">

            <!-- Header -->
            @include('includes.header')

            <!-- Content -->
            <main class="cd-main-content">
                <div id="content">
                    <div class="resume">
                        <div class="container">

                            <!-- TOP HEAD -->
                            <div class="top-head">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <h4>Resume </h4>
                                        <a href="resume(edit-mode).html">Edit Resume</a>
                                    </div>
                                    <div class="col-sm-6"> <a id="cd-menu-trigger" href="#0"><span class="cd-menu-icon"></span></a>
                                    </div>
                                </div>
                            </div>

                            <!-- Resume -->
                            <div class="row">
                                <!-- Sidebar -->
                                <div class="col-md-4">
                                    <div class="side-bar">
                                        @include('includes.professional_details')

                                        @include('includes.social')

                                        @include('includes.contact')

                                        <!-- MAIN CONTENT -->
                                        <div class="col-md-8">

                                            <!-- NAV LINKS -->
                                            <nav>
                                                <!-- Brand and toggle get grouped for better mobile display -->
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                                    data-target="#nav-tabis" aria-expanded="false"> <span class="tittle">MENU</span>
                                                    <span class="fa fa-navicon icon-nav"></span> </button>
                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="nav-tabis">
                                                    <ul class="isop-filter nav nav-pills">
                                                        <li role="presentation" class="active"><a href="#about-me"
                                                                aria-controls="about-me" role="tab" data-toggle="tab"><i
                                                                    class="icon-user"></i> ABOUT ME</a></li>
                                                        <li role="presentation"><a href="#resume" aria-controls="resume"
                                                                role="tab" data-toggle="tab"><i class="icon-book-open"></i>RESUME</a></li>
                                                        <li role="presentation"><a href="#portfolio" aria-controls="portfolio"
                                                                role="tab" data-toggle="tab"><i class="icon-rocket"></i>PORTFOLIO</a></li>
                                                        <li role="presentation"><a href="#blog" aria-controls="blog"
                                                                role="tab" data-toggle="tab"><i class="icon-note"></i>BLOG</a></li>
                                                        <li role="presentation"><a href="#contact" aria-controls="contact"
                                                                role="tab" data-toggle="tab"> <i class="icon-pencil"></i>CONTACT
                                                                ME</a></li>
                                                    </ul>
                                                </div>
                                            </nav>
                                            <!-- NAV LINKS END -->

                                            <div class="tab-content">

                                                @include('includes.about')
