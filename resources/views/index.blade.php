<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="author" content="M_Adnan" />
    <!-- Document Title -->
    <title>Munachimso Ani</title>

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
    <script src="{{ url('assets/js/vendors/modernizr.js') }}"></script>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Page Wrapper -->
    <div id="wrap">


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

                                </div>
                                <div class="col-sm-6">
                                    @if(Session::has('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif
                                </div>

                            </div>
                        </div>

                        <!-- Resume -->
                        <div class="row">
                            <!-- Sidebar -->
                            <div class="col-md-4">
                                <div class="side-bar">

                                    <!-- Professional Details -->
                                    <h5 class="tittle">Professional Details</h5>
                                    <img src="{{ url('assets/images/passport.JPG') }}" class="img-responsive" alt="">
                                    <ul class="personal-info">
                                        <li>
                                            <p> <span> Name</span> Munachimso Ani </p>
                                        </li>
                                        <li>
                                            <p> <span> Age</span> 27 Years </p>
                                        </li>
                                        <li>
                                            <p> <span> Location</span> Los Angeles, California </p>
                                        </li>

                                        <li>
                                            <p> <span> Degree</span> BSC </p>
                                        </li>
                                        <li>
                                            <p> <span> Career Level</span> Mid-Level </p>
                                        </li>
                                        <li>
                                            <p> <span> Phone</span> (951) 375-6334 </p>
                                        </li>

                                        <li>
                                            <p> <span> E-mail</span> <a href="mailto:animunachimso@gmail.com">
                                                    animunachimso@gmail.com</a>
                                            </p>
                                        </li>
                                        <li>
                                            <p> <span> Website</span><a href="https://animuna.com"> animuna.com </a></p>
                                        </li>
                                    </ul>



                                    <!-- Social Profiles -->
                                    <h5 class="tittle">Social Profiles</h5>
                                    <div class="social-icon bor-btm padding-25">
                                        <ul>
                                            <li> <a target="_blank" href="https://www.facebook.com/munachimso.ani"> <i
                                                        class="fa fa-facebook"></i></a>
                                            </li>
                                            <li> <a target="_blank" href="https://twitter.com/AniMunachimso"> <i class="fa fa-twitter"></i></a>
                                            </li>
                                            <li> <a target="_blank" href="https://www.linkedin.com/in/munachimso-ani">
                                                    <i class="fa fa-linkedin"></i></a>
                                            </li>

                                        </ul>
                                    </div>

                                    <!-- Contact Me -->
                                    <h5 class="tittle">Contact Me</h5>
                                    <div class="contact padding-25">


                                        <!-- FORM -->
                                        <form role="form" id="contact_form_1" class="contact-form" method="POST" action="{{ route('conatact.send.mail') }}">
                                            {{ csrf_field() }}
                                            <ul class="row">
                                                <li class="col-sm-4">
                                                    <label class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                                        <input type="text" class="form-control" name="name" id="name_1"
                                                            value="{{ old('name') }}" placeholder="NAME">
                                                    </label>
                                                    @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </li>
                                                <li class="col-sm-4">
                                                    <label class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <input type="text" class="form-control" name="email" id="email_1"
                                                            value="{{ old('email') }}" placeholder="EMAIL">
                                                    </label>
                                                    @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                    @endif
                                                </li>

                                                <li class="col-sm-12">
                                                    <label class="{{ $errors->has('message') ? ' has-error' : '' }}">
                                                        <textarea class="form-control" name="message" id="message_1"
                                                            rows="5" placeholder="CONTENT..."></textarea>
                                                    </label>
                                                    @if ($errors->has('message'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('message') }}</strong>
                                                    </span>
                                                    @endif
                                                </li>
                                                <li class="col-sm-12">
                                                    <button type="submit" value="submit" id="btn_submit_1">SEND
                                                        ME</button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>

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
                                            <li role="presentation" class="active"><a href="#about-me" aria-controls="about-me"
                                                    role="tab" data-toggle="tab"><i class="icon-user"></i> ABOUT ME</a></li>
                                            <li role="presentation"><a href="#resume" aria-controls="resume" role="tab"
                                                    data-toggle="tab"><i class="icon-book-open"></i>RESUME</a></li>
                                            <li role="presentation"><a href="#portfolio" aria-controls="portfolio" role="tab"
                                                    data-toggle="tab"><i class="icon-rocket"></i>PORTFOLIO</a></li>
                                            <li role="presentation"><a href="#contact" aria-controls="contact" role="tab"
                                                    data-toggle="tab"> <i class="icon-pencil"></i>CONTACT ME</a></li>
                                        </ul>
                                    </div>
                                </nav>
                                <!-- NAV LINKS END -->



                                <div class="tab-content">

                                    <!-- ABOUT ME -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="about-me">
                                        <div class="inside-sec">
                                            <!-- BIO AND SKILLS -->
                                            <h5 class="tittle">About Me</h5>

                                            <!-- Blog -->
                                            <section class="about-me padding-top-10">

                                                <!-- Personal Info -->
                                                <ul class="personal-info">
                                                    <li>
                                                        <p> <span> Name</span> Munachimso Ani </p>
                                                    </li>
                                                    <li>
                                                        <p> <span> Age</span> 27 Years </p>
                                                    </li>
                                                    <li>
                                                        <p> <span> Location</span> Los Angeles, California </p>
                                                    </li>

                                                    <li>
                                                        <p> <span> Degree</span> BSC </p>
                                                    </li>
                                                    <li>
                                                        <p> <span> Career Level</span> Mid-Level </p>
                                                    </li>
                                                    <li>
                                                        <p> <span> Phone</span> (951) 375-6334 </p>
                                                    </li>

                                                    <li>
                                                        <p> <span> E-mail</span> <a href="#."> animunachimso@gmail.com</a>
                                                        </p>
                                                    </li>
                                                    <li>
                                                        <p> <span> Website</span><a href="https://animuna.com">
                                                                animuna.com
                                                            </a></p>
                                                    </li>
                                                </ul>

                                                <!-- I’m Web Designer -->
                                                <h5 class="tittle">I’m Software Developer</h5>
                                                <div class="padding-20">
                                                    <p> I am a developer with problem solving skills, i work well with
                                                        teams and i like to challenege myself. I like to hang out with
                                                        my
                                                        friends

                                                    </p>
                                                </div>

                                                <!-- Services -->
                                                <h5 class="tittle">Services</h5>
                                                <div class="row padding-20 margin-top-50">

                                                    <!-- Icon -->
                                                    <div class="col-md-4 text-center">
                                                        <div class="icon-box i-large ib-black">
                                                            <div class="ib-icon"> <i class="fa fa-whatsapp"></i> </div>
                                                            <div class="ib-info">
                                                                <h4 class="h6">WEB DEVELOPMENT</h4>
                                                                <p>I'm good at building dynamic websites with
                                                                    PHP, Laravel(a PHP framework for MVC Architecture),
                                                                    Spring Framework(a Java framework for MVC
                                                                    Architecture), JSP,
                                                                    Javascript and MySQL.</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Icon -->
                                                    <div class="col-md-4 text-center">
                                                        <div class="icon-box i-large ib-black">
                                                            <div class="ib-icon"> <i class="fa fa-magic"></i> </div>
                                                            <div class="ib-info">
                                                                <h4 class="h6">WEB DESIGN</h4>
                                                                <p>Rally good at Front-End Design, i have
                                                                    great command of HTML, CSS and the bootstrap
                                                                    framework..</p>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Icon -->
                                                    <div class="col-md-4 text-center">
                                                        <div class="icon-box i-large ib-black">
                                                            <div class="ib-icon"> <i class="fa fa-smile-o"></i> </div>
                                                            <div class="ib-info">
                                                                <h4 class="h6">MOBILE DEVELOPMENT</h4>
                                                                <p>I'm exceptional at android application development.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                                <!-- Skills -->
                                                <h5 class="tittle">Skills</h5>

                                                <!-- Sound Engineering -->
                                                <div class="panel-group accordion padding-20" id="accordion">
                                                    <div class="panel panel-default">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- PANEL HEADING -->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"> <a data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapseOne"
                                                                            class="collapsed"> PHP</a> </h4>
                                                                </div>
                                                            </div>

                                                            <!-- Skillls Bars -->
                                                            <div class="col-sm-8">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="80" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 72%;"> </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Business Administration -->

                                                    <div class="panel panel-default">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- PANEL HEADING -->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"> <a data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapsetwo"
                                                                            class="collapsed"> Laravel</a> </h4>
                                                                </div>
                                                            </div>

                                                            <!-- Skillls Bars -->
                                                            <div class="col-sm-8">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="60" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 83%;"> <span
                                                                            class="sr-only">60% Complete</span> </div>
                                                                </div>

                                                                <!-- Skillls Text -->
                                                                <div id="collapsetwo" class="panel-collapse collapse">
                                                                    <div class="panel-body">
                                                                        <p>Lorem ipsum dolor sit amet, consectetur
                                                                            adipiscing elit. Proin nibh augue, suscipit
                                                                            a, scelerisque sed, lacinia in, mi. Cras
                                                                            vel lorem.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- HTML -->
                                                    <div class="panel panel-default">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- PANEL HEADING -->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"> <a data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapsethree"
                                                                            class="collapsed"> HTML5/CSS3</a> </h4>
                                                                </div>
                                                            </div>

                                                            <!-- Skillls Bars -->
                                                            <div class="col-sm-8">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 95%;"> <span
                                                                            class="sr-only">60% Complete</span> </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Javascript -->
                                                    <div class="panel panel-default">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- PANEL HEADING -->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"> <a data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapsethree"
                                                                            class="collapsed">
                                                                            Javascript</a> </h4>
                                                                </div>
                                                            </div>

                                                            <!-- Skillls Bars -->
                                                            <div class="col-sm-8">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 85%;"> <span
                                                                            class="sr-only">60% Complete</span> </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Java -->
                                                    <div class="panel panel-default">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- PANEL HEADING -->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"> <a data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapsethree"
                                                                            class="collapsed">
                                                                            Java</a> </h4>
                                                                </div>
                                                            </div>

                                                            <!-- Skillls Bars -->
                                                            <div class="col-sm-8">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 80%;"> <span
                                                                            class="sr-only">60% Complete</span> </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- SQL -->
                                                    <div class="panel panel-default">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- PANEL HEADING -->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"> <a data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapsethree"
                                                                            class="collapsed">
                                                                            SQL</a> </h4>
                                                                </div>
                                                            </div>

                                                            <!-- Skillls Bars -->
                                                            <div class="col-sm-8">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 85%;"> <span
                                                                            class="sr-only">60% Complete</span> </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Spring -->
                                                    <div class="panel panel-default">
                                                        <div class="row">
                                                            <div class="col-sm-4">
                                                                <!-- PANEL HEADING -->
                                                                <div class="panel-heading">
                                                                    <h4 class="panel-title"> <a data-toggle="collapse"
                                                                            data-parent="#accordion" href="#collapsethree"
                                                                            class="collapsed">
                                                                            Spring Framework</a> </h4>
                                                                </div>
                                                            </div>

                                                            <!-- Skillls Bars -->
                                                            <div class="col-sm-8">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100" style="width: 75%;"> <span
                                                                            class="sr-only">60% Complete</span> </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </section>
                                        </div>
                                    </div>

                                    <!-- RESUME -->
                                    <div role="tabpanel" class="tab-pane fade" id="resume">


                                        <!-- Professional Experience -->
                                        <div class="inside-sec margin-top-30">
                                            <!-- Professional Experience -->
                                            <h5 class="tittle">Professional Experience</h5>
                                            <div class="padding-30 exp-history">

                                                <!-- Wordpress Developer -->
                                                <div class="exp">
                                                    <div class="media-left"> <span class="sun">2002 - 2008</span> </div>
                                                    <div class="media-body">

                                                        <h6>Wordpress Developer</h6>
                                                        <p>Market Network</p>
                                                        <p>San Francisco, California, USA</p>
                                                        <p class="margin-top-10"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Proin nibh augue, suscipit a,
                                                            scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam
                                                            pellentesque aliquet tellus. Phasellus pharetra nulla ac
                                                            diam (...) <a href="#.">Read More</a> </p>
                                                    </div>
                                                </div>

                                                <!-- html5 and css3 Developer -->
                                                <div class="exp">
                                                    <div class="media-left"> <span class="sun">2009 - 2016</span> </div>
                                                    <div class="media-body">


                                                        <h6>html5 and css3 Developer</h6>
                                                        <p>Market Network</p>
                                                        <p>San Francisco, California, USA</p>
                                                        <p class="margin-top-10"> Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit. Proin nibh augue, suscipit a,
                                                            scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam
                                                            pellentesque aliquet tellus. Phasellus pharetra nulla ac
                                                            diam (...) <a href="#.">Read More</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Academic Background -->
                                        <div class="inside-sec margin-top-30">
                                            <!-- Academic Background -->
                                            <h5 class="tittle">Academic Background</h5>
                                            <div class="padding-30 exp-history">

                                                <!-- Wordpress Developer -->
                                                <div class="exp">
                                                    <div class="media-left"> <span class="sun">2009 - 2014</span> </div>
                                                    <div class="media-body">

                                                        <h6>Bachalor of Science in Computer Engineering</h6>
                                                        <p>Enugu State University of Science and Technlogy, Nigeira</p>

                                                    </div>
                                                </div>

                                                <!-- html5 and css3 Developer -->
                                                <div class="exp">
                                                    <div class="media-left"> <span class="sun">2017 - Dec 2019(present)</span>
                                                    </div>
                                                    <div class="media-body">
                                                        <!-- COmpany Logo -->
                                                        <h6>Masters of Science in Computer Science</h6>
                                                        <p>California State University Los Angeles, USA</p>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- PORTFOLIO -->
                                    <div role="tabpanel" class="tab-pane fade" id="portfolio">
                                        <div class="inside-sec">
                                            <!-- BIO AND SKILLS -->
                                            <h5 class="tittle">PORTFOLIO</h5>

                                            <!-- PORTFOLIO -->
                                            <section class="portfolio padding-top-50 padding-bottom-50">
                                                <!-- Work Filter -->
                                                <!-- PORTFOLIO ITEMS -->
                                                <div id="Container" class="item-space row col-3">





                                                    <!-- ITEM -->
                                                    <article class="portfolio-item mix pf-design pf-digital-art">
                                                        <div class="portfolio-image"> <a href="#.">
                                                                <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/personalfeed/4.png') }}">
                                                            </a>
                                                            <div class="portfolio-overlay style-4">
                                                                <div class="detail-info">
                                                                    <div class="position-center-center">
                                                                        <h3 class="no-margin">Personal Feed</h3>
                                                                        <span><a href="#." data-toggle="modal"
                                                                                data-target="#personalFeed">Adroid App</a></span>
                                                                        <a href="#." class="go" data-toggle="modal"
                                                                            data-target="#personalFeed"><i class="fa fa-link"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>

                                                    <!-- ITEM -->
                                                    <article class="portfolio-item mix pf-design pf-digital-art">
                                                        <div class="portfolio-image"> <a href="#.">
                                                                <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/energyaudit/1.png') }}">
                                                            </a>
                                                            <div class="portfolio-overlay style-4">
                                                                <div class="detail-info">
                                                                    <div class="position-center-center">
                                                                        <h3 class="no-margin">Energy Audit</h3>
                                                                        <span><a href="#." data-toggle="modal"
                                                                                data-target="#energyaudit">Web App</a></span>
                                                                        <a href="#." class="go" data-toggle="modal"
                                                                            data-target="#energyaudit"><i class="fa fa-link"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>

                                                    <!-- ITEM -->
                                                    <article class="portfolio-item mix pf-web-design pf-digital-art ">
                                                        <div class="portfolio-image"> <a href="#."> <img class="img-responsive"
                                                                    alt="Open Imagination" src="{{ url('assets/images/portfolio/lekki/1.png') }}">
                                                            </a>
                                                            <div class="portfolio-overlay style-4">
                                                                <div class="detail-info">
                                                                    <div class="position-center-center">
                                                                        <h3 class="no-margin">School Portal</h3>
                                                                        <span><a href="#.">Web App</a></span>

                                                                        <a href="#." class="go" data-toggle="modal"
                                                                            data-target="#lekki"><i class="fa fa-link"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>


                                                </div>
                                            </section>
                                        </div>
                                    </div>


                                    <!-- Contact -->
                                    <div role="tabpanel" class="tab-pane fade" id="contact">
                                        <div class="inside-sec">
                                            <!-- BIO AND SKILLS -->
                                            <h5 class="tittle">CONATCT ME</h5>

                                            <!-- Conatct Pages  -->
                                            <section>
                                                <div class="padding-left-30 padding-right-30 padding-top-50 padding-bottom-50">
                                                    <div class="row ">
                                                        <!-- Phone Number  -->
                                                        <div class="col-md-4 text-center">
                                                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-xlarge dark-text">
                                                                <div class="ib-icon"> <i class="fa fa-mobile text-primary"></i>
                                                                </div>
                                                                <div class="ib-info text-dark">
                                                                    <p>+1 951 376 6334</p>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Address -->
                                                        <div class="col-md-4 text-center">
                                                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                                                                <div class="ib-icon"> <i class="fa fa-map-marker text-primary"></i>
                                                                </div>
                                                                <div class="ib-info text-dark">
                                                                    <p>2351 Warwick Avenue, Apt 29, Los Angeles
                                                                        California 90032</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Email  -->
                                                        <div class="col-md-4 text-center">
                                                            <div class="icon-box ib-style-1 ib-circle ib-bordered ib-bordered-white ib-bordered-thin ib-medium ib-text-alt i-large">
                                                                <div class="ib-icon"> <i class="fa fa-envelope-o text-primary"></i>
                                                                </div>
                                                                <div class="ib-info text-dark">
                                                                    <p class="no-margin-bottom"><a href="#." class="text-white">animunachimso@gmail.com</a></p>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--
                                                <!-- MAP -->
                                                <section class="map-block">
                                                    <div class="map-wrapper" id="map-canvas" data-lat="-37.814199"
                                                        data-lng="144.961560" data-zoom="13" data-style="1"></div>
                                                    <div class="markers-wrapper addresses-block"> <a class="marker"
                                                            data-rel="map-canvas" data-lat="-37.814199" data-lng="144.961560"
                                                            data-string="Envato"></a> </div>
                                                </section> --}}

                                                <!-- Contact  -->
                                                <h5 class="tittle">SAY HELLO</h5>
                                                <div class="contact style-3 light-border padding-top-50 padding-bottom-50 padding-left-20 padding-right-20">

                                                    <!-- Form  -->
                                                    <div class="contact-right">
                                                        <!-- Success Msg -->
                                                        <div id="contact_message_1" class="success-msg"> <i class="fa fa-paper-plane-o"></i>Thank
                                                            You. Your Message has been Submitted</div>

                                                        <!-- FORM -->




                                                        <form role="form" id="contact_form_1" class="contact-form"
                                                            method="POST" action="{{ route('conatact.send.mail') }}">
                                                            {{ csrf_field() }}
                                                            <ul class="row">
                                                                <li class="col-sm-4">
                                                                    <label class="{{ $errors->has('name') ? ' has-error' : '' }}">
                                                                        <input type="text" class="form-control" name="name"
                                                                            id="name_1" value="{{ old('name') }}"
                                                                            placeholder="NAME">
                                                                    </label>
                                                                    @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </li>
                                                                <li class="col-sm-4">
                                                                    <label class="{{ $errors->has('email') ? ' has-error' : '' }}">
                                                                        <input type="text" class="form-control" name="email"
                                                                            id="email_1" value="{{ old('email') }}"
                                                                            placeholder="EMAIL">
                                                                    </label>
                                                                    @if ($errors->has('email'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('email') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </li>

                                                                <li class="col-sm-12">
                                                                    <label class="{{ $errors->has('message') ? ' has-error' : '' }}">
                                                                        <textarea class="form-control" name="message"
                                                                            id="message_1" rows="5" placeholder="CONTENT..."></textarea>
                                                                    </label>
                                                                    @if ($errors->has('message'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('message') }}</strong>
                                                                    </span>
                                                                    @endif
                                                                </li>
                                                                <li class="col-sm-12">
                                                                    <button type="submit" value="submit" id="btn_submit_1">SEND
                                                                        ME</button>
                                                                </li>
                                                            </ul>
                                                        </form>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- End Content -->

        <!-- Footer -->
        <footer class="footer">
            <div class="rights">
                <p>© Copyright 2016 MotiCV. All right reserved.</p>
            </div>
        </footer>
        <!-- End Footer -->

    </div>


    <!-- Modal -->
    <div class="modal fade" id="personalFeed" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personal Feed </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/personalfeed/1.png') }}">
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/personalfeed/2.png') }}">
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/personalfeed/3.png') }}">
                        </div>
                        <div class="col-md-4">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/personalfeed/5.png') }}">
                        </div>

                    </div>
                    <p>
                        An android app to view the latest Top Stories, Sports and you can also check out Movie Reviews.
                        You can download it from Google Play Store. Technologies: Java(native app)<br>
                    </p>
                    Link: <a target="_blank" class="text-primary" text-primary"" href="https://play.google.com/store/apps/details?id=com.munachimsoani.android.personalfeedapp">
                        Peronal Feed </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="energyaudit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Energy Audit </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/energyaudit/1.png') }}">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/energyaudit/2.png') }}">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/energyaudit/2.png') }}">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/energyaudit/3.png') }}">
                        </div>
                        <div class="col-md-12">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/energyaudit/5.png') }}">
                        </div>

                    </div>
                    <p>
                        A Web application for assessment of the energy needs and efficiency of a building or buildings.
                        Technologies: PHP(Laravel), MySQL.<br>
                    </p>

                </div>

            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="lekki" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Lekkki British School Learning Mangement System </h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <img class="img-responsive" alt="Open Imagination" src="{{ url('assets/images/portfolio/lekki/1.png') }}">
                        </div>


                    </div>
                    <p>
                        A web-based system that provides a number of services to facilitates teaching, learning,
                        student administration, and program assessment. Technologies used: PHP(Laravel), HTML,
                        MySQL.<br>
                    </p>
                    <p>
                        Where i worked as a Front-End Developer at Winxviv International Limted, Lagos Nigeria
                    </p>
                    Link: <a target="_blank" class="text-primary" text-primary"" href="https://eportal.lekkibritishschool.com">
                        E Portal </a>

                </div>

            </div>
        </div>
    </div>
    <!-- End Page Wrapper -->

    <!-- JavaScripts -->
    <script src="{{ url('assets/js/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('assets/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/js/vendors/owl.carousel.min.js') }}"></script>
    <script src="{{ url('assets/js/vendors/jquery.isotope.min.js') }}"></script>
    <script src="{{ url('assets/js/main.js') }}"></script>

    <!-- Begin Map Script-->
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    {{-- <script src="{{ url('assets/js/vendors/map.js') }}"></script> --}}
</body>

</html>
