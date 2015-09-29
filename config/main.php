<?php

return [

    'component' => [
        'file-cache' => [
            'class'  => 'tourze\Cache\Component\FileCache',
            'params' => [
                'path' => sys_get_temp_dir() . DIRECTORY_SEPARATOR,
                'securityKey' => 'file-cache',
            ],
        ],
    ],
];
