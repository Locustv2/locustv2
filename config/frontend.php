<?php
return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__) . '/frontend',
    'controllerNamespace' => 'frontend\controllers',
    'defaultRoute' => 'site',
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Hlda7pbzWf0G2S-QSxavfI_i__SDFUmC',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'enableStrictParsing' => false,
            'rules' => [
                '' => 'site/index',
                '<controller:[\w+\-]+>' => '<controller>/index',
                '<controller:[\w+\-]+>/<id:[\d]+>' => '<controller>/view',
                '<controller:[\w+\-]+>/<action:[\w+\-]+>/<id:[\d]+>' => '<controller>/<action>',
                '<controller:[\w+\-]+>/<action:[\w+\-]+>' => '<controller>/<action>',
            ],
        ],
    ],
];
