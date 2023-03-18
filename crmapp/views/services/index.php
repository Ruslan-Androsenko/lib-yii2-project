<?php

use app\models\service\ServiceRecord;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\service\ServiceSearchModel $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Service Records';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-record-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Service Record', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'name',
            'hourly_rate',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, ServiceRecord $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
