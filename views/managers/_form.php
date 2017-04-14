<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Managers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="managers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Manager_pasport_number')->textInput() ?>

    <?= $form->field($model, 'Surname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Father_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Birthday')->textInput() ?>

    <?= $form->field($model, 'Salary')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
