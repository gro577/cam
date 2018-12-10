<?php
$this->title=$camera['title'];
$description=mb_substr($camera['description'],0,127).'...';
$this->registerMetaTag(['name' => 'description', 'content' => $description]);
//$this->description=substr($camera['description'],0,126).'&hellip';
/**
 * Created by PhpStorm.
 * User: root
 * Date: 23.10.18
 * Time: 22:46
 */
?>
<!-- Page Content
================================================== -->
<div class="span7"><!--Begin page content column-->

    <h2 class="title-bg"><?= $camera['title'] ?></h2>
    <div class="iFrameContainer">
        <iframe class="iFrameClass" src="<?= $camera['url'] ?>" frameborder="0"
                allowfullscreen=""></iframe>
    </div>
    <br>
    <p><?= $camera['description'] ?></p>
    <!--
    <div class="row">
        <div class="span3">
            <h5>2 Column Layout</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc
                iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt
                sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.
                Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus
                rhoncus vitae id dui.</p>
            <button class="btn btn-mini btn-inverse" type="button">Read more</button>
        </div>
        <div class="span3">
            <h5>2 Column Layout</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla iaculis mattis lorem, quis gravida nunc
                iaculis ac. Proin tristique tellus in est vulputate luctus fermentum ipsum molestie. Vivamus tincidunt
                sem eu magna varius elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.
                Nulla faucibus ligula eget ante varius ac euismod odio placerat. Nam sit amet felis non lorem faucibus
                rhoncus vitae id dui.</p>
            <button class="btn btn-mini btn-inverse" type="button">Read more</button>
        </div>
    </div>
    -->
</div> <!--End page content column-->

<!-- Page Right Sidebar
================================================== -->
<div class="span3 sidebar page-right-sidebar"><!-- Begin sidebar column -->

    <!--User Login-->
    <h5 class="title-bg">User Login</h5>
    <div class="input-prepend">
        <span class="add-on"><i class="icon-user"></i></span><input class="span2" id="prependedInput" size="16"
                                                                    type="text" placeholder="Username">
    </div>
    <div class="input-prepend">
        <span class="add-on"><i class="icon-lock"></i></span><input class="span2" id="appendedPrependedInput" size="16"
                                                                    type="text" placeholder="Password">
    </div>
    <button class="btn btn-small btn-inverse" type="button">Login</button>

    <!--Tabbed Content-->
    <h5 class="title-bg">More Info</h5>
    <ul class="nav nav-tabs">
        <li class="active"><a href="#comments" data-toggle="tab">Comments</a></li>
        <li><a href="#tweets" data-toggle="tab">Tweets</a></li>
        <li><a href="#about" data-toggle="tab">About</a></li>
    </ul>

    <div class="tab-content">
        <div class="tab-pane active" id="comments">
            <ul>
                <li><i class="icon-comment"></i>admin on <a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><i class="icon-comment"></i>admin on <a href="#">Consectetur adipiscing elit</a></li>
                <li><i class="icon-comment"></i>admin on <a href="#">Ipsum dolor sit amet consectetur</a></li>
                <li><i class="icon-comment"></i>admin on <a href="#">Aadipiscing elit varius elementum</a></li>
                <li><i class="icon-comment"></i>admin on <a href="#">ulla iaculis mattis lorem</a></li>
            </ul>
        </div>
        <div class="tab-pane" id="tweets">
            <ul>
                <li><a href="#"><i class="icon-share-alt"></i>@room122</a> Vivamus tincidunt sem eu magna varius
                    elementum. Maecenas felis tellus, fermentum vitae laoreet vitae, volutpat et urna.
                </li>
                <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Nulla faucibus ligula eget ante varius ac
                    euismod odio placerat.
                </li>
                <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Pellentesque iaculis lacinia leo. Donec
                    suscipit, lectus et hendrerit posuere, dui nisi porta risus, eget adipiscing
                </li>
                <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Vivamus augue nulla, vestibulum ac ultrices
                    posuere, vehicula ac arcu.
                </li>
                <li><a href="#"> <i class="icon-share-alt"></i>@room122</a> Sed ac neque nec leo condimentum rhoncus.
                    Nunc dapibus odio et lacus.
                </li>
            </ul>
        </div>
        <div class="tab-pane" id="about">
            <p>Enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt
                aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher
                vice lomo.</p>

            Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda
            shoreditch et.
        </div>
    </div>

    <!--Progress Bars-->
    <h5 class="title-bg">Progress Bars</h5>
    <div class="progress progress-info progress-striped">
        <div class="bar" style="width: 20%"></div>
    </div>
    <div class="progress progress-success progress-striped">
        <div class="bar" style="width: 40%"></div>
    </div>
    <div class="progress progress-warning progress-striped">
        <div class="bar" style="width: 60%"></div>
    </div>
    <div class="progress progress-danger progress-striped">
        <div class="bar" style="width: 80%"></div>
    </div>

</div><!-- End sidebar column -->


