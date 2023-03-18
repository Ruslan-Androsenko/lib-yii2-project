<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\service\ServiceRecord $model */

$this->title = 'Create Service Record';
$this->params['breadcrumbs'][] = ['label' => 'Service Records', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-record-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
