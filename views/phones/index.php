<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PhoneSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Phone Numbers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="phone-numbers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Phone Numbers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Phone_number_id',
            'Mobile:ntext',
            'Home:ntext',
            'Manager_pasport_number',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
