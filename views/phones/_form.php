<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PhoneNumbers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="phone-numbers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Mobile')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Home')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Manager_pasport_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
