<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'datamints forms get prefill',
    'description' => 'Prefills form fields by get-parameters',
    'category' => 'fe',
    'author' => 'Mark Weisgerber',
    'author_email' => 'm.weisgerber@datamints.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 0,
    'version' => '1.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
