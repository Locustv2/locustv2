<?php
return [
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => strtr('mysql:unix_socket=/cloudsql/{dbConnection};dbname=app_db', [
                '{dbConnection}' => getenv('CLOUD_SQL_CONNECTION_NAME', true)
            ]),
            'username' => getenv('CLOUD_SQL_USER', true),
            'password' => getenv('CLOUD_SQL_PASSWORD', true),
            'charset' => 'utf8mb4',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
        ],
    ],
];
