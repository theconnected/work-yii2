<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = 'รายการหนังสือ';
?>
<div>
    <?php
    $i = 1;
    foreach ($model as $val):
        ?>
            <?php if ($i % 6 == 1): ?>
            <div class=''>
            <?php endif; ?>

    <?php $form = ActiveForm::begin(['action' => Yii::$app->homeUrl . 'site/buy-book']); ?>  
            <div class='col-md-2'>
                <div class="panel panel-default">
                    <div class="panel-body">
                        <input type='hidden' name='Books[id]' value='<?= $val['id'] ?>' />
                        <b><?= $val['name'] ?></b>
                        <img src="../../../backend/web/images/uploads/<?= $val['image'] ?>" alt="..." class="img-rounded" width='125'>
                        <label ><?= $val['price'] ?> ฿</label>
                    </div>
                    <div class="panel-footer">
    <?= Html::submitButton("<i class='glyphicon glyphicon-ok'></i> สั่งซื้อสินค้า", ['class' => 'btn btn-success']) ?>

                    </div>
                </div>
            </div>
            <?php ActiveForm::end(); ?> 

        <?php if ($i % 6 == 0): ?>
            </div>
            <?php
        endif;
        $i++;
        ?>      
<?php endforeach; ?>

</div>



