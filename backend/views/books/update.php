<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Books */

$this->title = 'แก้ไข: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Books', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'แก้ไข';
?>
<div class="books-update">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
