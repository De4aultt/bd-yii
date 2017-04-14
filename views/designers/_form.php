<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Designers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="designers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Designer_pasport_number')->textInput() ?>

    <?= $form->field($model, 'Surname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Father_name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Salary')->textInput() ?>

    <?= $form->field($model, 'Gender')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Email')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
