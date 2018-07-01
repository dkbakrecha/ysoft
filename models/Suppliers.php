<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "suppliers".
 *
 * @property int $id
 * @property string $name
 * @property string $contact
 * @property string $email
 * @property string $address
 * @property string $created
 * @property int $status 1 = active, 0 = inactive
 */
class Suppliers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'suppliers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'contact', 'email', 'address'], 'required'],
            [['address'], 'string'],
            [['created'], 'safe'],
            [['status'], 'integer'],
            [['name', 'email'], 'string', 'max' => 255],
            [['contact'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'contact' => 'Contact',
            'email' => 'Email',
            'address' => 'Address',
            'created' => 'Created',
            'status' => 'Status',
        ];
    }
}
