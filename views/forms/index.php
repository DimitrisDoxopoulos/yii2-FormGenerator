<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Forms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="forms-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <div class="d-flex">
        <p>
            <?= Html::a('Create Forms', ['create'], ['class' => 'btn btn-success mr-2']) ?>
        </p>
    </div>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            [
                'attribute' => 'active',
                'content' => function($model) {
                    return $model->getStatusLabels()[$model->active];
                }
            ],
            [
                'attribute' => 'form_name',
                'content' =>  $model->form_name
                
            ],

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    


</div>

