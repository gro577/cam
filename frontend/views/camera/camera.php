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

</div> <!--End page content column-->

<!-- Page Right Sidebar
================================================== -->
<div class="span3 sidebar page-right-sidebar"><!-- Begin sidebar column -->

    <!--User Login-->
    <h5 class="title-bg">Немного о проекте</h5>
            <div class="tab-pane" id="about">
            <p>Наш каталог онлайн камер позволит Вам увидеть новые места. 
			На нашем сайте собраны камеры, транслирующие видео в реальном времени. 
			Мы, совершенно бесплатно, предлагаем посетить интересные уголки нашей планеты, не вставая с дивана, 
			увидеть уникальные строения, познать жизнь редких животных, узнать, 
			как живут другие люди в отдалённых уголках планеты, 
			очутиться на пляже океана и все это в режиме реального времени, не выходя из дома. 
			</p>

            Мы постоянно пополняем нашу коллекцию трансляций, оставайтесь с нами, и вы откроете для себя много нового.
        </div>

    <!--Tabbed Content-->
    

    <!--Progress Bars
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
-->
</div><!-- End sidebar column -->


