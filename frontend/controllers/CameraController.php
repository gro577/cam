<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 18.10.18
 * Time: 16:08
 */

namespace frontend\controllers;


use frontend\IFaces\RouteControllersInterface;
use frontend\models\Camera;
use yii\data\Pagination;
use yii\web\Controller;

class CameraController extends Controller implements RouteControllersInterface
{
    const LIMITITEMSPERPAGE = 10;

    public function actionList(){
        $camers= Camera::find()->where(['publicate'=>Camera::PUBLICATE]);
        $pages = new Pagination(['totalCount'=>$camers->count(), 'pageSize' => self::LIMITITEMSPERPAGE]);
        $pages->pageSizeParam = false;
        $models = $camers->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        return $this->render('camerasList', [
            'models' => $models,
            'pages' => $pages,
        ]);
    }

    public function actionElementView($id){
        $camera = Camera::findById($id);
        return $this->render('camera',['camera'=>$camera]);
    }

}