<?php
use yii\grid\GridView;
use yii\helpers\Html;
$this->title = 'หนังสือขายดี';
$this->params['breadcrumbs'][] = $this->title;
?>

<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' =>[
        [
            'contentOptions' => ['width' => '100'],
            'attribute' => 'ภาพ',
            'format' => 'html',
            'value' => function($model) {
        $url = Yii::$app->homeUrl.'/images/uploads/';
        return Html::img($url . $model['image'], ['width' => '100']);
    },
        ],
       [
            'attribute' => 'ชื่อหนังสือ',
            'value' => 'name',],
        [
            'attribute' => 'จำนวน',
            'value' => 'total',],
        ],
    ]);
?>
