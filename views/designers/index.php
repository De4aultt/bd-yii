<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\DesignersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Designers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Designers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'Designer_pasport_number',
            'Surname:ntext',
            'Name:ntext',
            'Father_name:ntext',
            'Salary',
            // 'Gender:ntext',
            // 'Email:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
