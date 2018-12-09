<?php

use yii\helpers\Url;

?>
<h5 class="title-bg"> Часто просматриваемые камеры</h5>

<div class="row">
    <?php foreach ($cams as $cam):
        if ($cam->url_type === 0) {
            $preview = explode('?autoplay', explode('embed/', $cam->url)[1])[0];
            $previewPath = 'https://i.ytimg.com/vi/' . $preview . '/mqdefault_live.jpg';
        }
        ?>
        <div class="span2 topcamers">
            <?php if (!empty($previewPath)): ?>
                <img src="<?= $previewPath ?>" >
            <?php endif; ?>
            <h5><?= $cam->title ?></h5>
            <p class="over"><?= $cam->description ?></p>
            <a href="<?= Url::toRoute(['/camera', 'id' => $cam->id]); ?>">
                <button class="btn btn-mini btn-inverse" type="button">Просмотреть</button>
            </a>
        </div>
    <?php endforeach; ?>
</div>
