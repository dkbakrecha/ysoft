<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $product_code
 * @property string $product_title
 * @property string $description
 * @property int $height
 * @property int $width
 * @property int $length
 * @property int $net_size
 * @property int $cbm product cbm
 * @property int $cbf product cbf
 * @property string $special_instruction
 * @property string $special_instruction_file
 * @property string $assembly_instruction
 * @property string $assembly_instruction_file
 * @property string $finishing_type
 * @property string $keywords
 * @property int $multiple_parts '0'=>'No','1'=>'Yes'
 * @property string $image
 * @property string $created
 * @property string $modified
 * @property int $status "0"=>"inactive","1"=>"inactive","2"=>'deleted'
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_code', 'product_title', 'description', 'height', 'width', 'length', 'net_size', 'cbm', 'cbf', 'special_instruction', 'special_instruction_file', 'assembly_instruction', 'assembly_instruction_file', 'finishing_type', 'keywords', 'multiple_parts', 'image', 'status'], 'required'],
            [['description'], 'string'],
            [['height', 'width', 'length', 'category_id','sub_category_id','net_size', 'cbm', 'cbf', 'multiple_parts', 'status'], 'integer'],
            [['created', 'modified'], 'safe'],
            [['product_code'], 'string', 'max' => 25],
            [['product_title'], 'string', 'max' => 100],
            [['special_instruction', 'special_instruction_file', 'assembly_instruction', 'assembly_instruction_file', 'finishing_type', 'keywords', 'image'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_code' => 'Product Code',
            'product_title' => 'Product Title',
            'description' => 'Description',
            'height' => 'Height',
            'width' => 'Width',
            'length' => 'Length',
            'net_size' => 'Net Size',
            'cbm' => 'Cbm',
            'cbf' => 'Cbf',
            'special_instruction' => 'Special Instruction',
            'special_instruction_file' => 'Special Instruction File',
            'assembly_instruction' => 'Assembly Instruction',
            'assembly_instruction_file' => 'Assembly Instruction File',
            'finishing_type' => 'Finishing Type',
            'keywords' => 'Keywords',
            'multiple_parts' => 'Multiple Parts',
            'image' => 'Image',
            'created' => 'Created',
            'modified' => 'Modified',
            'status' => 'Status',
        ];
    }
}
