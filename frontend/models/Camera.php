<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24.10.18
 * Time: 19:45
 */

namespace frontend\models;


use common\models\Camers;
use frontend\IFaces\RouteModelInterface;

class Camera extends Camers implements RouteModelInterface
{
    const PUBLICATE = 1;
    public static function findById($id){
        return static::findOne(['id'=>$id, 'publicate'=>self::PUBLICATE]);
    }
    public static function findByAlias($alias){
        return static::findOne(['alias'=>$alias, 'publicate'=>self::PUBLICATE]);
    }

}