<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Universal page browser',
    'description' => 'Provides page browsing services for extensions',
    'category' => 'fe',
    'version' => '1.3.4',
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Dmitry Dulepov',
    'author_email' => 'dmitry@typo3.org',
    'author_company' => '',
    'constraints' =>
        [
            'depends' =>
                [
                    'typo3' => '4.5.0-8.7.999',
                ],
            'conflicts' =>
                [
                ],
            'suggests' =>
                [
                ],
        ],
];

