<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "book_orders".
 *
 * @property integer $id
 * @property integer $book_id
 * @property integer $qty
 * @property integer $user_id
 * @property string $create_date
 * @property integer $create_by
 * @property string $update_date
 * @property integer $update_by
 * @property integer $item_order
 * @property string $isactive
 */
class BookOrders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'book_orders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['book_id', 'qty', 'user_id', 'create_by', 'update_by', 'item_order'], 'integer'],
            [['create_date', 'update_date'], 'safe'],
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
            'book_id' => 'Book ID',
            'qty' => 'จำนวน',
            'user_id' => 'ผู้สั่งซื้อ',
            'create_date' => 'วันที่',
            'create_by' => 'Create By',
            'update_date' => 'Update Date',
            'update_by' => 'Update By',
            'item_order' => 'Item Order',
            'isactive' => 'Isactive',
        ];
    }
}
