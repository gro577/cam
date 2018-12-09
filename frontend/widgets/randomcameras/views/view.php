<?php
use yii\helpers\Url;
if (!empty($cams)):
    foreach ($cams as $cam):?>
        <ul class="post-category-list">
            <li><a href="<?= Url::toRoute(['/camera/camera', 'id' => $cam->id]);?>"><?=$cam->title?></a></li>
        </ul>


    <?php endforeach;
endif;?>