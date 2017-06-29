<?php

use yii\helpers\Html;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?= Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <script src="<?= Yii::$app->homeUrl; ?>plugins/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->homeUrl; ?>plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->homeUrl; ?>plugins/bootstrap/js/holder.js"></script>
        <script src="<?= Yii::$app->homeUrl; ?>plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->homeUrl; ?>js/core.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->homeUrl; ?>plugins/bootstrapValidator/bootstrapValidator.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->homeUrl; ?>plugins/switchery/switchery.min.js" type="text/javascript"></script>
        <script src="<?= Yii::$app->homeUrl; ?>js/maniac.js" type="text/javascript"></script>
       
        <link href="<?= Yii::$app->homeUrl; ?>plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>plugins/ionicons/css/ionicons.min.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>plugins/animate/animate.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>plugins/bootstrapValidator/bootstrapValidator.min.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>css/material.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>css/style.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>css/plugins.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>css/helpers.css" rel="stylesheet" />
        <link href="<?= Yii::$app->homeUrl; ?>css/responsive.css" rel="stylesheet" />
        <?php $this->head() ?>
    </head>
    <body class="auth-page height-auto bg-blue-600">
        <?php $this->beginBody() ?>

        <?= $content ?>

        <?php $this->endBody() ?>
    </body>
    <?php $this->registerJs('
        maniac.loadvalidator();
        maniac.loadswitchery();');
    ?>
</html>
<?php $this->endPage() ?>
