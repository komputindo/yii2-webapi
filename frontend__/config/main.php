<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'app-frontend',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'frontend\controllers',
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-frontend',
            'parsers' => [
                'application/json' => 'yii\web\JsonParser',
            ]            
        ],

        // 'response' => [
        //     // ...
        //     'formatters' => [
        //         \yii\web\Response::FORMAT_JSON => [
        //             'class' => 'yii\web\JsonResponseFormatter',
        //             'prettyPrint' => YII_DEBUG, // use "pretty" output in debug mode
        //             'encodeOptions' => JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE,
        //             // ...
        //         ],
        //     ],
        // ],

        
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the frontend
            'name' => 'advanced-frontend',
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
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        */

        // http://localhost/yii2-api/frontend/web/index.php/users/1
        'urlManager' => [
            'enablePrettyUrl' => true,  // Disable r= routes
            'enableStrictParsing' => true,
            'showScriptName' => false,  // Disable index.php
            'rules' => [
                [
                    'class' => 'yii\rest\UrlRule', 
                    'controller' => ['user', 'usr', 'mhs','test', 'employe', 'employee'],
                    'extraPatterns' => [
                        'POST purchasedcard' => 'purchasedcard',
                        'GET search' => 'search',
                    ]                    
                ],
            ],
        ]

    ],
    'params' => $params,
];
