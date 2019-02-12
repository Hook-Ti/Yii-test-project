<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "links".
 *
 * @property int $id
 * @property int $user_id
 * @property string $theme
 * @property string $description
 * @property string $link
 * @property int $theme_id
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'links';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'theme_id'], 'integer'],
            [['theme', 'description', 'link'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'theme' => 'Theme',
            'description' => 'Description',
            'link' => 'Link',
            'theme_id' => 'Theme ID',
        ];
    }
}
