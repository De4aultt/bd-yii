<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Designers */

$this->title = 'Update Designers: ' . $model->Name;
$this->params['breadcrumbs'][] = ['label' => 'Designers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Name, 'url' => ['view', 'id' => $model->Designer_pasport_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="designers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
