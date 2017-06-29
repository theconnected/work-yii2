<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "books".
 *
 * @property integer $id
 * @property string $name
 * @property string $detail
 * @property string $price
 * @property integer $cat_id
 * @property string $image
 * @property string $create_date
 * @property integer $create_by
 * @property string $update_date
 * @property integer $update_by
 * @property integer $item_order
 * @property string $isactive
 */
class Books extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'books';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail'], 'string'],
            [['price'], 'number'],
            [['cat_id', 'create_by', 'update_by', 'item_order'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
            [['name'], 'string', 'max' => 100],
            [['image'], 'string', 'max' => 255],
            [['isactive'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ชื่อหนังสือ',
            'detail' => 'รายละเอียด',
            'price' => 'ราคา',
            'cat_id' => 'ประเภท',
            'image' => 'รูปภาพ',
            'create_date' => 'Create Date',
            'create_by' => 'Create By',
            'update_date' => 'Update Date',
            'update_by' => 'Update By',
            'item_order' => 'Item Order',
            'isactive' => 'Isactive',
        ];
    }
}
