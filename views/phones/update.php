<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PhoneNumbers */

$this->title = 'Update Phone Numbers: ' . $model->Phone_number_id;
$this->params['breadcrumbs'][] = ['label' => 'Phone Numbers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Phone_number_id, 'url' => ['view', 'id' => $model->Phone_number_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="phone-numbers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
