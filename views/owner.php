<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Employees */
/* @var $form ActiveForm */
?>
<div class="owner">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'firstname') ?>
        <?= $form->field($model, 'lastname') ?>
        <?= $form->field($model, 'email') ?>
        <?= $form->field($model, 'phonenumber') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- owner -->
