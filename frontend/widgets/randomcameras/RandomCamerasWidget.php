<?php
namespace frontend\widgets\randomcameras;

use frontend\models\Camera;
use yii\base\Widget;

class RandomCamerasWidget extends Widget
{
    const LIMIT=10;

    protected $webcams;

    public function init()
    {
        parent::init();
        $this->webcams=Camera::findByLimit(self::LIMIT);
    }

    public function run()
    {
        return $this->render('view',['cams'=>$this->webcams]);
    }
}
