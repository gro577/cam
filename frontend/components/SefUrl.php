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
            $routeArray=explode('/',$url);
            $className='frontend\\models\\'.ucfirst($routeArray[0]);
            $element=$className::findByAlias($routeArray[1]);
            if(!empty($element)){
                $route = '/'.$routeArray[0].'/element-view';
                $params=['id'=>$element->id];
                return [$route, $params];
            }
        }
        return false;
    }

    public function createUrl($manager, $route, $params)
    {
        if(!empty($params['id'])){
            $routeArray=explode('/',$route);
            $className='frontend\\models\\'.ucfirst($routeArray[0]);
            $camera=$className::findById($params['id']);
            return "/$routeArray[0]/$camera->alias";
        }
    }
}