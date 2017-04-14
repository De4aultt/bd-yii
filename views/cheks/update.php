<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Cheks */

$this->title = 'Update Cheks: ' . $model->Chek_number;
$this->params['breadcrumbs'][] = ['label' => 'Cheks', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->Chek_number, 'url' => ['view', 'id' => $model->Chek_number]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cheks-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
