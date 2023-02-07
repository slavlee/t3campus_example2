<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'T3 Campus Example Extension',
    'description' => 'This is just a example extension of T3 Campus for educational reasons.',
    'category' => 'plugin',
    'author' => 'Kevin Chileong Lee',
    'author_email' => 'info@slavlee.de',
    'author_company' => 'T3 Campus',
    'state' => 'stable',
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];