<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

$this->title = "example";
?>
<div class="site-error">

    <h1><?= Html::encode($message) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <div class="alert alert-success">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <div class="alert alert-warning">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <div class="alert alert-error">
        <?= nl2br(Html::encode($message)) ?>
    </div>

    <?= Html::encode($message) ?>  

</div>
