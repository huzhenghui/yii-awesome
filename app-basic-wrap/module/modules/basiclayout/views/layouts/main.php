<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;

use app\modules\basiclayout\assets\AppAsset;
use app\modules\basiclayout\widgets\Header;
use app\modules\basiclayout\widgets\Footer;
use app\modules\basiclayout\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>
    <?= Header::widget() ?>
    <main role="main" class="flex-shrink-0">
        <div class="container">
            <?= Breadcrumbs::widget([
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]) ?>
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
    </main>
    <?= Footer::widget() ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>