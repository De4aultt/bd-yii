<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ChekSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cheks';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cheks-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Cheks', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Chek_number',
            'Count',
            'Total_price',
            'Picture_number',
            'Order_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
