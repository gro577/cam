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
 * @property string $alias
 * @property string $description
 * @property string $geography
 * @property string $time_zone
 * @property string $quality
 * @property string $source
 * @property int $url_type
 * @property int $publicate
 * @property int $moderated
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
            [['url', 'base_url', 'title', 'alias', 'description', 'geography', 'time_zone', 'quality', 'source'], 'string'],
            [['title', 'alias', 'url_type'], 'required'],
            [['url_type', 'publicate', 'moderated'], 'integer'],
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
            'alias' => 'Alias',
            'description' => 'Description',
            'geography' => 'Geography',
            'time_zone' => 'Time Zone',
            'quality' => 'Quality',
            'source' => 'Source',
            'url_type' => 'Url Type',
            'publicate' => 'Publicate',
            'moderated' => 'Moderated',
        ];
    }
}


