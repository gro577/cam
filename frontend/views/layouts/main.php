<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <?php $this->head() ?>

</head>
<body class="home">
<?php $this->beginBody() ?>
<!-- Color Bars (above header)-->
<div class="color-bar-1"></div>
<div class="color-bar-2 color-bg"></div>

<div class="container">

    <div class="row header"><!-- Begin Header -->

        <!-- Logo
        ================================================== -->
        <div class="span5 logo">
           <!-- <a href="index.htm"><img src="img/piccolo-logo.png" alt=""/></a>  -->
            <h3><a href="/">bedtrip.ru</a> - твое диванное путешетвие</h3>
        </div>

        <!-- Main Navigation
        ================================================== -->
        <div class="span7 navigation">
            <div class="navbar hidden-phone">
			
                <ul class="nav">
					<li class="active"><a href="/" >Гланая</a></li>
					<li><a href="list">Камеры</a></li>
                    <!--
					<li class="dropdown active">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="index.htm">Home <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/">Full Page</a></li>
                            <li><a href="index-gallery.htm">Gallery Only</a></li>
                            <li><a href="index-slider.htm">Slider Only</a></li>
                        </ul>
                    </li>


                    <li><a href="features.htm">Features</a></li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="page-full-width.htm">Pages <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="page-full-width.htm">Full Width</a></li>
                            <li><a href="page-right-sidebar.htm">Right Sidebar</a></li>
                            <li><a href="page-left-sidebar.htm">Left Sidebar</a></li>
                            <li><a href="page-double-sidebar.htm">Double Sidebar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="gallery-4col.htm">Gallery <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="gallery-3col.htm">Gallery 3 Column</a></li>
                            <li><a href="gallery-4col.htm">Gallery 4 Column</a></li>
                            <li><a href="gallery-6col.htm">Gallery 6 Column</a></li>
                            <li><a href="gallery-4col-circle.htm">Gallery 4 Round</a></li>
                            <li><a href="gallery-single.htm">Gallery Single</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="blog-style1.htm">Blog <b
                                    class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="blog-style1.htm">Blog Style 1</a></li>
                            <li><a href="blog-style2.htm">Blog Style 2</a></li>
                            <li><a href="blog-style3.htm">Blog Style 3</a></li>
                            <li><a href="blog-style4.htm">Blog Style 4</a></li>
                            <li><a href="blog-single.htm">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.htm">Contact</a></li>
					-->
                </ul>

            </div>

            <!-- Mobile Nav
            ================================================== -->
            <form action="#" id="mobile-nav" class="visible-phone">
                <div class="mobile-nav-select">
                    <select onchange="window.open(this.options[this.selectedIndex].value,'_top')">
                        <option value="">МЕНЮ...</option>
                        <option value="/">Главная</option>
                        <option value="list">Камеры</option>
                        <!--
						<option value="index-gallery.htm">- Gallery Only</option>
                        <option value="index-slider.htm">- Slider Only</option>
                        <option value="features.htm">Features</option>
                        <option value="page-full-width.htm">Pages</option>
                        <option value="page-full-width.htm">- Full Width</option>
                        <option value="page-right-sidebar.htm">- Right Sidebar</option>
                        <option value="page-left-sidebar.htm">- Left Sidebar</option>
                        <option value="page-double-sidebar.htm">- Double Sidebar</option>
                        <option value="gallery-4col.htm">Gallery</option>
                        <option value="gallery-3col.htm">- 3 Column</option>
                        <option value="gallery-4col.htm">- 4 Column</option>
                        <option value="gallery-6col.htm">- 6 Column</option>
                        <option value="gallery-4col-circle.htm">- Gallery 4 Col Round</option>
                        <option value="gallery-single.htm">- Gallery Single</option>
                        <option value="blog-style1.htm">Blog</option>
                        <option value="blog-style1.htm">- Blog Style 1</option>
                        <option value="blog-style2.htm">- Blog Style 2</option>
                        <option value="blog-style3.htm">- Blog Style 3</option>
                        <option value="blog-style4.htm">- Blog Style 4</option>
                        <option value="blog-single.htm">- Blog Single</option>
                        <option value="page-contact.htm">Contact</option>
						-->
                    </select>
                </div>
            </form>

        </div>

    </div><!-- End Header -->
    <div class="row">
    <div class="span2 blog-style-2"><!-- Begin sidebar column -->

        <!--Navigation-->
        <h5 class="title-bg">Navigation</h5>
        <ul class="post-category-list">
            <li><a href="#"><i class="icon-plus-sign"></i>About Us</a></li>
            <li><a href="#"><i class="icon-plus-sign"></i>Services</a></li>
            <li><a href="#"><i class="icon-plus-sign"></i>Mission</a></li>
            <li><a href="#"><i class="icon-plus-sign"></i>Clients</a></li>
        </ul>

        <!--Latest News-->
        <h5 class="title-bg">Latest News</h5>
        <ul class="popular-posts">
            <li>
                <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                <h6><a href="#">Lorem ipsum dolor sit amet consectetur adipiscing elit</a></h6>
                <em>Posted on 09/01/15</em>
            </li>
            <li>
                <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                <h6><a href="#">Nulla iaculis mattis lorem, quis gravida nunc iaculis</a></h6>
                <em>Posted on 09/01/15</em>
            <li>
                <a href="#"><img src="img/gallery/gallery-img-2-thumb.jpg" alt="Popular Post"></a>
                <h6><a href="#">Vivamus tincidunt sem eu magna varius elementum</a></h6>
                <em>Posted on 09/01/15</em>
            </li>
        </ul>

        <!--Testimonials-->
        <h5 class="title-bg">Testimonials</h5>

        <p class="quote-text side">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In interdum felis fermentum."<cite>- Client Name, Big Company</cite></p>

        <p class="quote-text side">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum."<cite>- Another Client Name, Big Company</cite></p>


    </div><!-- End sidebar column -->
        <?= $content ?>
    </div>
</div>

<div class="footer-container"><!-- Begin Footer -->
    <div class="container">
        <div class="row footer-row">
            <div class="span3 footer-col">
                <h5>About Us</h5>
                <img src="img/piccolo-footer-logo.png" alt="Piccolo"/><br/><br/>
                <address>
                    <strong>Design Team</strong><br/>
                    123 Main St, Suite 500<br/>
                    New York, NY 12345<br/>
                </address>
                <ul class="social-icons">
                    <li><a href="#" class="social-icon facebook"></a></li>
                    <li><a href="#" class="social-icon twitter"></a></li>
                    <li><a href="#" class="social-icon dribble"></a></li>
                    <li><a href="#" class="social-icon rss"></a></li>
                    <li><a href="#" class="social-icon forrst"></a></li>
                </ul>
            </div>
            <div class="span3 footer-col">
                <h5>Latest Tweets</h5>
                <ul>
                    <li><a href="#">@room122</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                    <li><a href="#">@room122</a> In interdum felis fermentum ipsum molestie sed porttitor ligula rutrum.
                        Morbi blandit ultricies ultrices.
                    </li>
                    <li><a href="#">@room122</a> Vivamus nec lectus sed orci molestie molestie. Etiam mattis neque eu
                        orci rutrum aliquam.
                    </li>
                </ul>
            </div>
            <div class="span3 footer-col">
                <h5>Latest Posts</h5>
                <ul class="post-list">
                    <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                    <li><a href="#">Consectetur adipiscing elit est lacus gravida</a></li>
                    <li><a href="#">Lectus sed orci molestie molestie etiam</a></li>
                    <li><a href="#">Mattis consectetur adipiscing elit est lacus</a></li>
                    <li><a href="#">Cras rutrum, massa non blandit convallis est</a></li>
                </ul>
            </div>
            <div class="span3 footer-col">
                <h5>Flickr Photos</h5>
                <ul class="img-feed">
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                    <li><a href="#"><img src="img/gallery/flickr-img-1.jpg" alt="Image Feed"></a></li>
                </ul>
            </div>
        </div>

        <div class="row"><!-- Begin Sub Footer -->
            <div class="span12 footer-col footer-sub">
                <div class="row no-margin">
                    <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span>
                    </div>
                    <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                                        href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                                        href="#">Contact</a>
                            </span>
                    </div>
                </div>
            </div>
        </div><!-- End Sub Footer -->

    </div>
</div><!-- End Footer -->

<!-- Scroll to Top -->
<div id="toTop" class="hidden-phone hidden-tablet">Back to Top</div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
