<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 28.11.18
 * Time: 20:24
 */

namespace frontend\IFaces;


Interface RouteModelInterface
{
    public static function findById($id);

    public static function findByAlias($url);
}