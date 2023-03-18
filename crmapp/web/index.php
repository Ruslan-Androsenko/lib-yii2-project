<?php

defined('YII_DEBUG') or define('YII_DEBUG', true);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../vendor/yiisoft/yii2/Yii.php';

// Получаем конфигуацию
$config = require __DIR__ . '/../config/web.php';

// Создаем и немедленно выполняем приложение
(new yii\web\Application($config))->run();
