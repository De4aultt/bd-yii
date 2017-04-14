<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Pictures */

$this->title = 'Update Pictures: ' . $model->Picture_id;
$this->params['breadcrumbs'][] = ['label' => 'Pictures', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Picture_id, 'url' => ['view', 'id' => $model->Picture_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pictures-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
