<?php
namespace frontend\components;

use yii\web\UrlRuleInterface;

class SefUrl implements UrlRuleInterface
{
    public function parseRequest($manager, $request)
    {
        // TODO: Implement parseRequest() method.
        $url = $request->getUrl();
        if (strpos($url, '?')) {
            $urlRoute = explode('?', $url)[1];
            $urlRouteArray = explode('&', $urlRoute);
            $route = substr(str_replace('%2F', '/', array_shift($urlRouteArray)), 2);
            $params = array();
            foreach ($urlRouteArray as $param) {
                $param = explode('=', $param);
                $params[$param[0]] = $param[1];
            }
        }
        return [$route, $params];
    }

    public function createUrl($manager, $route, $params)
    {
       // echo "\"></a>baseurl<pre>";var_dump($manager->rules);echo "</pre>";
       // echo "\"></a>manager<pre>";var_dump($manager);echo "</pre>";
        echo "route<pre>";var_dump($route);echo "</pre>";
        echo "params<pre>";var_dump($params);echo "</pre>";
       // die;
        return "ololo";
    }
}