<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Orders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orders-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Order_Date')->textInput() ?>

    <?= $form->field($model, 'Town')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Street')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'House')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Manager_pasport_number')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
