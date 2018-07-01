<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $title
 * @property int $parent_id 0 = main category, other = category id
 * @property string $created
 * @property int $status 1 = active, 2 = delete
 */
class Categories extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['parent_id', 'status'], 'integer'],
            [['created'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'parent_id' => 'Parent ID',
            'created' => 'Created',
            'status' => 'Status',
        ];
    }
}
