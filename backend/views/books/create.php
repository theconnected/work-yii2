<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Books */

$this->title = 'เพิ่มหนังสือ';
$this->params['breadcrumbs'][] = ['label' => 'รายการหนังสือ', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="">
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>
