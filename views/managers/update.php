<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Managers */

$this->title = 'Update Managers: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Managers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Manager_pasport_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="managers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
