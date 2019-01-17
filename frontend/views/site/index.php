<?php

/* @var $this yii\web\View */

$this->title = 'Веб камеры мира онлайн в реальном времени';
$this->registerMetaTag(['name' => 'description', 'content' => 'Веб камеры мира онлайн в реальном времени']);
?>
<div class="span10">
    <div class="row headline"><!-- Begin Headline -->

        <!-- Slider Carousel
       ================================================== -->
        <div class="span7">
            <div class="flexslider">
                <ul class="slides">
                    <li><img src="img/gallery/1.jpg" alt="slider"/>
                    </li>
                    <li><img src="img/gallery/2.jpg" alt="slider"/>
                    </li>
                    <li><img src="img/gallery/3.jpg" alt="slider"/>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Headline Text
        ================================================== -->
        <div class="span3">
            <h3>BEDRIP<br/>
                Подглядывай за планетой с нами.</h3>
            <p class="lead">Найди места для путешествий твоей мечты.</p>
        </div>
    </div><!-- End Headline -->

    <!-- Begin Gallery Row -->
    <div class="span10"><!--Begin page content column-->


        <?= \frontend\widgets\topcams\TopCamsWidget::widget() ?>

    </div><!-- End Gallery Row -->

    <div class="row"><!-- Begin Bottom Section -->

    
    </div><!-- End Bottom Section -->
</div>
