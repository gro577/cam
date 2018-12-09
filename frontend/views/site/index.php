<?php

/* @var $this yii\web\View */

$this->title = 'Онлайн веб камеры';
?>
<div class="span10">
    <div class="row headline"><!-- Begin Headline -->

        <!-- Slider Carousel
       ================================================== -->
        <div class="span7">
            <div class="flexslider">
                <ul class="slides">
                    <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider"/></a>
                    </li>
                    <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider"/></a>
                    </li>
                    <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider"/></a>
                    </li>
                    <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider"/></a>
                    </li>
                    <li><a href="gallery-single.htm"><img src="img/gallery/slider-img-1.jpg" alt="slider"/></a>
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
            <!--  <p>Cras rutrum, massa non blandit convallis, est lacus gravida enim, eu fermentum ligula orci et
                  tortor.
                  In
                  sit amet nisl ac leo pulvinar molestie. Morbi blandit ultricies ultrices.</p>
              <a href="#"><i class="icon-plus-sign"></i>Read More</a>-->
        </div>
    </div><!-- End Headline -->

    <!-- Begin Gallery Row -->
    <div class="span10"><!--Begin page content column-->


        <?= \frontend\widgets\topcams\TopCamsWidget::widget() ?>

    </div><!-- End Gallery Row -->

    <div class="row"><!-- Begin Bottom Section -->

        <!-- Blog Preview
        ================================================== -->
        <!--
        <div class="span5">

            <h5 class="title-bg">From the Blog
                <small>All the latest news</small>
                <button id="btn-blog-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-blog-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

            <div id="blogCarousel" class="carousel slide ">

               
                <div class="carousel-inner">

                   
                    <div class="active item">
                        <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt=""
                                                       class="align-left blog-thumb-preview"/></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">A subject that is beautiful in itself</a></h4>
                            <ul class="blog-details-preview">
                                <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                <li>
                                <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#"
                                                                                            title="Link">Admin</a>
                                <li>
                                <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#"
                                                                                              title="Link">12</a>
                                <li>
                                <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a
                                            href="#">tutorials</a>,
                                    <a
                                            href="#">illustration</a>
                            </ul>
                        </div>
                        <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                            interdum
                            felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus
                            tellus,
                            aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                        <p>
                    </div>

                    
                    <div class="item">
                        <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt=""
                                                       class="align-left blog-thumb-preview"/></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">A great artist is always before his time</a></h4>
                            <ul class="blog-details-preview">
                                <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                <li>
                                <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#"
                                                                                            title="Link">Admin</a>
                                <li>
                                <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#"
                                                                                              title="Link">12</a>
                                <li>
                                <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a
                                            href="#">tutorials</a>,
                                    <a
                                            href="#">illustration</a>
                            </ul>
                        </div>
                        <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                            interdum
                            felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus
                            tellus,
                            aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                        <p>
                    </div>

                    
                    <div class="item">
                        <a href="blog-single.htm"><img src="img/gallery/blog-med-img-1.jpg" alt=""
                                                       class="align-left blog-thumb-preview"/></a>
                        <div class="post-info clearfix">
                            <h4><a href="blog-single.htm">Is art everything to anybody?</a></h4>
                            <ul class="blog-details-preview">
                                <li><i class="icon-calendar"></i><strong>Posted on:</strong> Sept 4, 2015
                                <li>
                                <li><i class="icon-user"></i><strong>Posted by:</strong> <a href="#"
                                                                                            title="Link">Admin</a>
                                <li>
                                <li><i class="icon-comment"></i><strong>Comments:</strong> <a href="#"
                                                                                              title="Link">12</a>
                                <li>
                                <li><i class="icon-tags"></i> <a href="#">photoshop</a>, <a
                                            href="#">tutorials</a>,
                                    <a
                                            href="#">illustration</a>
                            </ul>
                        </div>
                        <p class="blog-summary">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                            interdum
                            felis fermentum ipsum molestie sed porttitor ligula rutrum. Vestibulum lectus
                            tellus,
                            aliquet et iaculis sed, volutpat vel erat. <a href="#">Read more</a>
                        <p>
                    </div>

                </div>
            </div>
        </div>
        -->
        <!-- Client Area
        ================================================== -->
        <!--
        <div class="span5">

            <h5 class="title-bg">Recent Clients
                <small>That love us</small>
                <button id="btn-client-next" class="btn btn-inverse btn-mini" type="button">&raquo;</button>
                <button id="btn-client-prev" class="btn btn-inverse btn-mini" type="button">&laquo;</button>
            </h5>

            
            <div id="clientCarousel" class="carousel slide no-margin">
               
                <div class="carousel-inner">

                    <div class="active item">
                        <p class="quote-text">"Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                            interdum
                            felis fermentum ipsum molestie sed porttitor ligula rutrum. Morbi blandit ultricies
                            ultrices. Vivamus nec lectus sed orci molestie molestie."<cite>- Client Name, Big
                                Company</cite></p>
                    </div>

                    <div class="item">
                        <p class="quote-text">"Adipiscing elit. In interdum felis fermentum ipsum molestie sed
                            porttitor
                            ligula rutrum. Morbi blandit ultricies ultrices. Vivamus nec lectus sed orci
                            molestie
                            molestie."<cite>- Another Client Name, Company Name</cite></p>
                    </div>

                    <div class="item">
                        <p class="quote-text">"Mauris eget tellus sem. Cras sollicitudin sem eu elit aliquam
                            quis
                            condimentum nulla suscipit. Nam sed magna ante. Ut eget suscipit mauris."<cite>- On
                                More
                                Client, The Company</cite></p>
                    </div>

                </div>
            </div>

           
            <ul class="client-logos">
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-1.png" alt="Client"></a>
                </li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-2.png" alt="Client"></a>
                </li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-3.png" alt="Client"></a>
                </li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-4.png" alt="Client"></a>
                </li>
                <li><a href="#" class="client-link"><img src="img/gallery/client-img-5.png" alt="Client"></a>
                </li>
            </ul>

        </div>
        -->
    </div><!-- End Bottom Section -->
</div>
