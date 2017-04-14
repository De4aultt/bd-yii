<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Designers */

$this->title = 'Create Designers';
$this->params['breadcrumbs'][] = ['label' => 'Designers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
