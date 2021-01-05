<?php
return [
    'name' => 'appname',
    'sourceLanguage' => 'en-US',
    'language' => 'en-DE',
    'vendorPath' => dirname(__DIR__) . '/vendor',
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'bootstrap' => ['log'],
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
    'params' => array_merge(
        require __DIR__ . '/params.php',
        require __DIR__ . '/params-local.php'
    ),
];
