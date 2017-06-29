<?php

namespace backend\models;

use Yii;
use yii\base\Model;
/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $cat_name
 * @property string $remark
 * @property string $create_date
 * @property integer $create_by
 * @property string $update_date
 * @property integer $update_by
 * @property integer $item_order
 * @property string $isactive
 */
class Categories extends \yii\db\ActiveRecord
{
      public $category;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_date', 'update_date'], 'safe'],
            [['create_by', 'update_by', 'item_order'], 'integer'],
            [['cat_name'], 'string', 'max' => 100],
            [['remark'], 'string', 'max' => 255],
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
            'cat_name' => 'Cat Name',
            'remark' => 'Remark',
            'create_date' => 'Create Date',
            'create_by' => 'Create By',
            'update_date' => 'Update Date',
            'update_by' => 'Update By',
            'item_order' => 'Item Order',
            'isactive' => 'Isactive',
        ];
    }
}
