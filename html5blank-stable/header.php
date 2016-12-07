<!doctype html>
<html <?php language_attributes(); ?> class="no-js"> 
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<link href="<?php echo get_template_directory_uri(); ?>/normalize.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick/slick.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/libs/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="<?php echo get_template_directory_uri(); ?>/libs/rolling.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/fonts/stylesheet.css" rel="stylesheet" type="text/css">
		<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet" type="text/css">


		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/bootstrap/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/libs/slick/slick/slick.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

		<?php wp_head(); ?>

	</head>
	<body <?php body_class(); ?>>
	<div id="fb-root"></div>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8&appId=932221570208225";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

		<!-- wrapper -->
		<div class="wrapper">

			<!-- header -->
			<header class="header clear" role="banner">
				<div class="navbar-fixed-top">
			        <div class="row hidden-xs black_bg">
			          <div class="col-sm-11 Header">
			              <ul class="nav navbar-nav navbar-right home_header">
			                <li><a href="http://techkids.vn/">TRANG CHỦ</a></li>
			                <li><a href="http://techkids.vn/lien-he">LIÊN HỆ</a></li>
			              </ul>
			           </div>
			        </div>
<nav id="main_nav" class="navbar navbar-default navbar-fixed-top block nav_optional endblock {% %}{% %}">
<nav id="main_nav" class="navbar navbar-default navbar-fixed-top block nav_optional endblock {% %}{% %}">
    <nav class="navbar navbar-inverse navbar_secondary hidden-xs">
        <div class="container">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="http://techkids.vn/">TRANG CHỦ</a>
                </li>
                <li><a href="http://techkids.vn/lien-he">LIÊN HỆ</a>
                </li>
                <li></li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display-->
        <div class="navbar-header">
            <button type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" class="navbar-toggle collapsed"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button><a href="/" class="navbar-brand"><span style="" class="brand_logo"><img src="http://techkids.vn/cms/img/TechkidBrandColor.png" alt="TechKids"></span></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling-->
        <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown"><a href="http://techkids.vn/ve-chung-toi" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle disabled">Về Chúng Tôi<span class="visible-xs-inline-block caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://techkids.vn/ve-chung-toi">Giới thiệu  chung</a>
                        </li>
                        <li><a href="http://techkids.vn/ve-chung-toi#sumenh-tamnhin">Sứ mệnh, tầm nhìn, giá trị cốt lõi</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="http://techkids.vn/khoa-hoc" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle disabled">Các Khóa Học<span class="visible-xs-inline-block caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="http://techkids.vn/khoa-hoc/iOS">Lập Trình iOS</a>
                        </li>
                        <li><a href="http://techkids.vn/khoa-hoc/android">Lập Trình Android</a>
                        </li>
                        <li><a href="http://techkids.vn/khoa-hoc/web-fullstack">Lập trình Full-stack Web</a>
                        </li>
                        <li><a href="http://techkids.vn/khoa-hoc/code-for-everyone">Code For Everyone</a>
                        </li>
                        <li><a href="http://techkids.vn/khoa-hoc/code-for-kids">Code For Kids</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown"><a href="http://techkids.vn/khoa-hoc/Free-Code-Intensive" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle disabled">Free Code Intensive<span class="visible-xs-inline-block caret"></span></a>
                </li>
                <li class="dropdown"><a href="http://techkids.vn/hoc-vien" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle disabled">Học viên TechKids<span class="visible-xs-inline-block caret"></span></a>
                </li>
                <li class="dropdown"><a href="http://techkids.vn/chuong-trinh/" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle disabled">Các Sự Kiện<span class="visible-xs-inline-block caret"></span></a>
                </li>
            </ul>
            <div class="visible-xs-block">
                <form role="search" class="navbar-form navbar-right visible-xs-block">
                    <div class="form-group">
                        <input type="text" placeholder="Search" class="form-control">
                    </div>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="http://techkids.vn/">TRANG CHỦ</a>
                    </li>
                    <li><a href="http://techkids.vn/ve-chung-toi">VỀ CHÚNG TÔI</a>
                    </li>
                    <li><a href="http://techkids.vn/lien-he">LIÊN HỆ</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
			    </div>
			</header>
			<!-- /header -->
