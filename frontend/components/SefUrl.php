<?php
namespace frontend\components;

use yii\web\UrlRuleInterface;
use frontend\models\Camera;

class SefUrl implements UrlRuleInterface
{
    public function parseRequest($manager, $request)
    {
        $url = $request->getUrl();
        if (!empty($url) && $url!='/') {
            if(strpos($url,'/')!==false){
                $url = substr($url, 1);
            }
            $camera=Camera::findByAlias($url);
            if(!empty($camera)){
                $route = '/camera/camera';
                $params=['id'=>$camera->id];
                return [$route, $params];
            }
        }
        return false;
    }

    public function createUrl($manager, $route, $params)
    {
        if(!empty($params['id'])){
            $camera=Camera::findById($params['id']);
            return $camera->alias;
        }
    }
}