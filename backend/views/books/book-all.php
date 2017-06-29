<?php

use yii\grid\GridView;
use yii\helpers\Html;

$this->title = 'รายการสั่งซื้อสินค้าทั้งหมด';
$this->params['breadcrumbs'][] = $this->title;
?>

<?=

GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        [
            'attribute' => 'ชื่อหนังสือ',
            'value' => 'p_name',
        ],
        [
            'contentOptions' => ['width' => '100'],
            'attribute' => 'ภาพ',
            'format' => 'html',
            'value' => function($model) {
        $url = Yii::$app->homeUrl . '/images/uploads/';
        return Html::img($url . $model['image'], ['width' => '100']);
    },
        ],
        [
            'attribute' => 'ราคา',
            'value' => 'price',],
        [
            'attribute' => 'จำนวน',
            'value' => 'qty',],
        [
            'attribute' => 'ชื่อผู้สั่ง',
            'value' => 'username',],
        [
            'attribute' => 'วันที่',
            'value' => 'create_date'],
    ]
]);
?>