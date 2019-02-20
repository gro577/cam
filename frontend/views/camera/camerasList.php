<?php
use yii\widgets\LinkPager;
use yii\helpers\Url;

// выводим название организации (пример)


// отображаем постраничную разбивку
$this->title = 'Веб камеры мира онлайн в реальном времени';
$this->registerMetaTag(['name' => 'description', 'content' => 'Веб камеры мира онлайн в реальном времени']);
?>

<!-- Blog вPosts
================================================== -->
<div class="span7 blog">

    <!-- Blog Post 1 -->
    <?php foreach ($models as $model) :
        if ($model->url_type === 0) {
            $preview = explode('?autoplay', explode('embed/', $model->url)[1])[0];
            $previewPath = 'https://i.ytimg.com/vi/' . $preview . '/mqdefault_live.jpg';
        }
        ?>
        <article class="cameraArticle">

            <div>

                <h4 class="title-bg"><a
                            href="<?= Url::toRoute(['camera', 'id' => $model->id]); ?>"><?= $model->title ?></a></h4>
                <?php if (!empty($previewPath)): ?>
                    <a href="<?= Url::toRoute(['camera', 'id' => $model->id]); ?>"><img class="cameraListPreview" src="<?= $previewPath ?>" class="align-left"></a>
                <?php endif; ?>
				<?php
				if(strlen($model->description)>130){
					$textDesc=mb_substr($model->description,0,130)."...";
				}
				else{
					$textDesc=$model->description;
				}
				?>
                <p class="cameraListDesc"><?=$textDesc?></p>
                <a href="<?= Url::toRoute(['camera', 'id' => $model->id]); ?>">
                    <button class="btn btn-mini btn-inverse" type="button">Перейти</button>
                </a>
                <div class="post-summary-footer">

                </div>


            </div>
            <br>
        </article>
    <?php endforeach; ?>
    <!-- Blog Post 2 -->


    <!-- Pagination -->
    <div class="pagination">
        <?php
        echo LinkPager::widget([
            'pageCssClass' => 'pagination',
            'activePageCssClass' => 'active',
            'pagination' => $pages,
            //'registerLinkTags' => true
        ]);


        ?>
    </div>
</div>

<div class="span3 sidebar page-right-sidebar"><!-- Begin sidebar column -->

    <!--User Login-
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
        </div>->
</div><!-- End sidebar column -->
