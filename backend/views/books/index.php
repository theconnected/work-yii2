<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\BookSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'รายการหนังสือ';
$this->params['breadcrumbs'][] = $this->title;
?>
<?php // echo $this->render('_search', ['model' => $searchModel]);    ?>

<p>
    <?= Html::a('<i class="fa fa-plus"></i> เพิ่ม', ['create'], ['class' => 'btn btn-success']) ?>
</p>
<?=
GridView::widget([
    'dataProvider' => $dataProvider,
    //'filterModel' => $searchModel,
    'columns' => [
        [
            'contentOptions' => ['width' => '60'],
            'class' => 'yii\grid\SerialColumn'
        ],
        [
            'contentOptions' => ['width' => '100'],
            'attribute' => 'image',
            'format' => 'html',
            'value' => function($model) {
        $url = Yii::$app->homeUrl.'/images/uploads/';
        return Html::img($url . $model['image'], ['width' => '100']);
    },
        ],
        [
            'contentOptions' => ['width' => '200'],
            'attribute' => 'name',
        ],
        [
            'contentOptions' => ['width' => '200'],
            'attribute' => 'detail',
        ],
        [
            'contentOptions' => ['width' => '80'],
            'attribute' => 'price',
        ],
        [
            'contentOptions' => ['width' => '100'],
            'class' => 'yii\grid\ActionColumn',
            'template' => '{view} {update} {delete}',
            'buttons' => [
                'update' => function ($url) {
                    return Html::a('<i class="glyphicon glyphicon-pencil"></i>', $url, [
                                'title' => "แก้ไข",
                    ]);
                },
                        'delete' => function ($url) {
                    return Html::a('<i class="glyphicon glyphicon-trash"></i>', $url, [
                                'title' => "ลบ",
                                'data-confirm' => 'ยืนยัน',
                    ]);
                }
                    ],
                ],
            ],
        ]);
        ?>

