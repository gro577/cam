<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category_attachments".
 *
 * @property int $id
 * @property int $camera_id
 * @property int $category_id
 * @property int $main_category
 */
class CategoryAttachments extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_attachments';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['camera_id', 'category_id', 'main_category'], 'required'],
            [['camera_id', 'category_id', 'main_category'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'camera_id' => 'Camera ID',
            'category_id' => 'Category ID',
            'main_category' => 'Main Category',
        ];
    }
}
