<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.10.18
 * Time: 16:08
 */

namespace frontend\controllers;


use yii\web\Controller;

class CameraController extends Controller
{
    public function actionIndex(){
        return $this->render('camerasList');
    }

}