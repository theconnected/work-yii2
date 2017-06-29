<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'เข้าระบบ';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true])->label('ชื่อผู้ใช้งาน') ?>

                <?= $form->field($model, 'password')->passwordInput()->label('รหัสผ่าน') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('จำไว้ในระบบ') ?>

<!--                <div style="color:#999;margin:1em 0">
                    If you forgot your password you can <?//= Html::a('reset it', ['site/request-password-reset']) ?>.
                </div>-->

                <div class="form-group">
                    <?= Html::submitButton('เข้าระบบ', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
