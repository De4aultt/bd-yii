<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Cheks */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cheks-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Count')->textInput() ?>

    <?= $form->field($model, 'Total_price')->textInput() ?>

    <?= $form->field($model, 'Picture_number')->textInput() ?>

    <?= $form->field($model, 'Order_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
