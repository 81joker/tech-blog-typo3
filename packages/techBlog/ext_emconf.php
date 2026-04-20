<?php

/**
 * Extension Manager/Repository config file for ext "tech_blog".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Tech Blog',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.4.99',
            'fluid_styled_content' => '13.4.0-13.4.99',
            'rte_ckeditor' => '13.4.0-13.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Nehad\\TechBlog\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'kge',
    'author_email' => 'abo@geisler-design.de',
    'author_company' => 'Karsten Geisler',
    'version' => '1.0.0',
];
