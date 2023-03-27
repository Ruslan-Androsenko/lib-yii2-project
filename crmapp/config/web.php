<?php

return [
    'id' => 'crmapp',
    'basePath' => realpath(__DIR__ . '/../'),
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
    ],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'allowedIPs' => ['*'],
        ],
    ],
    'components' => [
        'request' => [
            'cookieValidationKey' => 'GghghhgGHjdsgTYTyt768GFChdkfdldf',
        ],
        'response' => [
            'formatters' => [
                'yaml' => [
                    'class' => 'app\utilities\YamlResponseFormatter',
                ],
            ],
        ],
        'view' => [
            'renderers' => [
                'md' => [
                    'class' => 'app\utilities\MarkdownRenderer',
                ],
            ],
            'theme' => [
                'class' => yii\base\Theme::class,
                'basePath' => '@app/themes/snowy',
            ],
        ],
        'db' => require __DIR__ . '/db.php',
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
    ],
    'extensions' => require __DIR__ . '/../vendor/yiisoft/extensions.php',
];
