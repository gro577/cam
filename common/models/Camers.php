<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "camers".
 *
 * @property int $id
 * @property string $url
 * @property string $base_url
 * @property string $title
 * @property string $breadcrumbs
 * @property string $preview
 * @property string $description
 * @property string $geography
 * @property string $time_zone
 * @property string $quality
 * @property string $source
 * @property int $url_type
 * @property int $publicate
 */
class Camers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'camers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['url', 'base_url', 'title', 'breadcrumbs', 'preview', 'description', 'geography', 'time_zone', 'quality', 'source'], 'string'],
            [['title', 'breadcrumbs', 'url_type'], 'required'],
            [['url_type', 'publicate'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'url' => 'Url',
            'base_url' => 'Base Url',
            'title' => 'Title',
            'breadcrumbs' => 'Breadcrumbs',
            'preview' => 'Preview',
            'description' => 'Description',
            'geography' => 'Geography',
            'time_zone' => 'Time Zone',
            'quality' => 'Quality',
            'source' => 'Source',
            'url_type' => 'Url Type',
            'publicate' => 'Publicate',
        ];
    }
}
