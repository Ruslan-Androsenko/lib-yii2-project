<?php
use yii\helpers\Html;
?>

<?= Html::beginForm(['/customers'], 'get'); ?>
<?= Html::label('Phone number to search:', 'PhoneRecord[number]'); ?>
<?= Html::textInput('PhoneRecord[number]'); ?>
<?= Html::submitButton('Search'); ?>
<?= Html::endForm(); ?>
