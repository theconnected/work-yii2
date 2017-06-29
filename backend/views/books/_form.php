<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model backend\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div >

 <?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data']
     
]);?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 3]) ?>

    <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

<?=$form->field($model,'cat_id')->dropdownList(
   ArrayHelper::map(\backend\models\Categories::find()->all(), 'id', 'cat_name'),[
       'prompt' =>'เลือกประเภท'
    ]
);?>
    <?= $form->field($model, 'image')->fileInput()?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'แก้ไข', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-warning']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
