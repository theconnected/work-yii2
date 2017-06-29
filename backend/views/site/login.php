<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'เข้าระบบ';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- BEGIN CONTENT -->
<div class="wrapper">
    <div class="panel overflow-hidden">
        <div class="bg-light-blue-500 padding-top-25 no-margin-bottom font-size-20 color-white text-center text-uppercase">
            <i class="ion-log-in margin-right-5"></i> สำหรับผู้ดูแลระบบ
        </div>
        <div class="alert bg-light-blue-500 text-center color-white no-radius no-margin padding-top-15 padding-bottom-30 padding-left-20 padding-right-20"></div>
				
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <div class="box-body padding-md">

            <div class="form-group">
                <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'class' => 'form-control input-lg', 'placeholder' => 'ชื่อผู้ใช้งาน'])->label(''); ?>
            </div>

            <div class="form-group">
                <?= $form->field($model, 'password')->passwordInput(['class' => 'form-control input-lg', 'placeholder' => 'รหัสผ่าน'])->label(''); ?>
            </div>        

            <div class="form-group margin-top-20">
                <input type="checkbox" class="js-switch" id="checkbox" checked name="<?=$model['rememberMe']?>"/><label for="checkbox" class="font-size-12 normal margin-left-10">จำฉันไว้</label>
                <!--<?//= $form->field($model, 'rememberMe')->checkbox(['class' => 'js-switch', 'id' => 'checkbox']); ?>-->
            </div>       
            <?= Html::submitButton('<i class="ion-log-in"></i> เข้าระบบ', ['class' => 'btn btn-dark bg-light-green-500 padding-10 btn-block color-white', 'name' => 'login-button']) ?>

        </div>
        <?php ActiveForm::end(); ?>
        <div class="panel-footer padding-md no-margin no-border bg-light-blue-500 text-center color-white">&copy; 2017 Book system.</div>
    </div>
</div>

