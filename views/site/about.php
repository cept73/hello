<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = iconv('cp1251', 'utf-8', 'Привет'); //Yii::t('app', 'About');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>test</p>
    <p>
        This is the About page. You may modify the following file to customize its content:
<?php echo 'lo hi' ?>
    </p>

    <code><?= __FILE__ ?></code>
</div>
