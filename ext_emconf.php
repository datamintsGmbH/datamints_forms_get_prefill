<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'datamints Forms GET Prefill',
    'description' => 'Prefills form fields by URL GET-parameters. Works with EXT:powermail & EXT:forms',
    'category' => 'fe',
    'author' => 'Mark Weisgerber',
    'author_email' => 'm.weisgerber@datamints.com',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '1.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '7.0.0-13.99.99',
        ],
		'suggests' => [
			'form' => '7.0.0-13.99.99',
			'powermail' => '10.0.0-10.4.99',
		],
        'conflicts' => [],
    ],
];
