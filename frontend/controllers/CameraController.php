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
    public function actionList(){
        return $this->render('camerasList');
    }

    public function actionCamera(){
        return $this->render('camera');
    }

}