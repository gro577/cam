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
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
(function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
ym(51511571, "init", {
id:51511571,
clickmap:true,
trackLinks:true,
accurateTrackBounce:true,
webvisor:true
});
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/51511571" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


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
					<li><a href="list">Онлайн веб камеры</a></li>
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
						-->
                    </select>
                </div>
            </form>

        </div>

    </div><!-- End Header -->
    <div class="row">
    <div class="span2 blog-style-2"><!-- Begin sidebar column -->

        <!--Navigation-->
        <h5 class="title-bg">Случайные камеры</h5>
        <?=\frontend\widgets\randomcameras\RandomCamerasWidget::widget()?>


       

    </div><!-- End sidebar column -->
        <?= $content ?>
    </div>
</div>

<div class="footer-container"><!-- Begin Footer -->
    <div class="container">

        <div class="row footer-row">
            <!--
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
            -->
        </div>

        <div class="row"><!-- Begin Sub Footer -->
            <div class="span12 footer-col footer-sub">
                <div class="row no-margin">
           <!--
                    <div class="span6"><span class="left">Copyright 2012 Piccolo Theme. All rights reserved.</span>
                    </div>
                    <div class="span6">
                            <span class="right">
                            <a href="#">Home</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Features</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                                        href="#">Gallery</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="#">Blog</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a
                                        href="#">Contact</a>
                            </span>
                    </div>
             -->
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
