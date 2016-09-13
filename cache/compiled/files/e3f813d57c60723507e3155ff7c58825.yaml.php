<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/html/grav-skeleton-blog-site/user/config/plugins/email.yaml',
    'modified' => 1473746922,
    'data' => [
        'enabled' => true,
        'from' => 'test@test.com',
        'from_name' => 'test',
        'to' => 'test@test.com',
        'to_name' => 'test',
        'mailer' => [
            'engine' => 'mail',
            'smtp' => [
                'server' => 'localhost',
                'port' => 25,
                'encryption' => 'none',
                'user' => '',
                'password' => ''
            ],
            'sendmail' => [
                'bin' => '/usr/sbin/sendmail'
            ]
        ],
        'content_type' => 'text/html',
        'debug' => false
    ]
];
