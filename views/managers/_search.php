<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ManagersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="managers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Manager_pasport_number') ?>

    <?= $form->field($model, 'Surname') ?>

    <?= $form->field($model, 'Name') ?>

    <?= $form->field($model, 'Father_name') ?>

    <?= $form->field($model, 'Birthday') ?>

    <?php // echo $form->field($model, 'Salary') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
