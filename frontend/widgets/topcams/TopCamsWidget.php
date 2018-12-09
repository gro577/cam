<?php
/**
 * Created by PhpStorm.
 * User: gro
 * Date: 09.12.2018
 * Time: 21:57
 */

namespace frontend\widgets\topcams;

use frontend\models\Camera;
use yii\base\Widget;

class TopCamsWidget extends Widget
{
    const LIMIT=5;

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