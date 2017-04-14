<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChekSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cheks-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'Chek_number') ?>

    <?= $form->field($model, 'Count') ?>

    <?= $form->field($model, 'Total_price') ?>

    <?= $form->field($model, 'Picture_number') ?>

    <?= $form->field($model, 'Order_number') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
