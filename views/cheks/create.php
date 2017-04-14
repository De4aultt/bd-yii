<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Cheks */

$this->title = 'Create Cheks';
$this->params['breadcrumbs'][] = ['label' => 'Cheks', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cheks-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
