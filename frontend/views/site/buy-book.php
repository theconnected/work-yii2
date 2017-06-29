<?php
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'สั่งซื้อ';
?>
<h1>หนังสือ : <?=$data['name']?></h1>
<img src='../../../backend/web/images/uploads/<?=$data['image']?>'/>
<hr/>
<b>รายละเอียด</b>
<p>
    <?=$data['detail']?> 
</p>
 <?php $form = ActiveForm::begin(['action'=>Yii::$app->homeUrl.'site/save-book-order']);?>

    <?= $form->field($model, 'book_id')->hiddenInput(['value' => $data['id']])->label('') ?>
    <?= $form->field($model, 'qty')->textInput(['value' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton('ยืนยันซื้อ',['class' => 'btn btn-success']) ?>
    </div>
    <?php ActiveForm::end(); ?>

