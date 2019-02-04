<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 04.02.19
 * Time: 21:34
 */

namespace backend\controllers;

use Yii;
use yii\web\Controller;
use \SimpleXMLElement as SimpleXMLElement;
use backend\models\Camera;

class SitemapController extends Controller
{
    const BASE_URL = 'http://www.bedtrip.ru/';

    public function actionGenerate()
    {
        $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" />');
        $camsList = Camera::find()->select(['alias'])->where(['publicate' => 1])->all();
        if (!empty($camsList)) {
            $url = $xml->addChild('url');
            $url->addChild('loc', self::BASE_URL);
            // $url->addChild('lastmod', date("Y-m-d"));
            $url->addChild('changefreq', "monthly");
            foreach ($camsList as $camera) {
                $url = $xml->addChild('url');
                $url->addChild('loc', self::BASE_URL . $camera->alias);
                //$url->addChild('lastmod', date("Y-m-d"));
                $url->addChild('changefreq', "monthly");
            }

            $dom = new \DOMDocument('1.0', "UTF-8");
            $dom->preserveWhiteSpace = false;
            $dom->formatOutput = true;
            $dom->encoding = "UTF-8";
            $dom->loadXML($xml->asXML());
            $sitemap = $dom->saveXML();
            $sitemapFile = fopen(Yii::getAlias('@frontend') . DIRECTORY_SEPARATOR . 'web' . DIRECTORY_SEPARATOR . 'sitemap.xml', "w");
            fwrite($sitemapFile, $sitemap);
            fclose($sitemapFile);
            return $sitemap;
        }
        else
            return "Нет ни одной опубликованной камеры";
    }

}