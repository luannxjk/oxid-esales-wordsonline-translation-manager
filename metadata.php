<?php

use WordsOnline\TranslationManager\Core as ModuleCore;
use WordsOnline\TranslationManager\Controller\Admin as ModuleAdminController;
use WordsOnline\TranslationManager as ModuleTranslationManager;

$sMetadataVersion = '2.1';
$aModule = [
    'id'           => 'wordsonline_translation_manager',
    'title'       => [
        'de' => 'WordsOnline Translation Manager',
        'en' => 'WordsOnline Translation Manager',
    ],
    'description'  => [
        'de' => 'Modul für die Übersetzung von Shoptexten.',
        'en' => 'Module for the text translation.',
    ],
    'thumbnail'    => 'img/logo.png',
    'version'      => '1.0.0',
    'author'       => 'Jonckers Team',
    'url'          => 'https://www.wordsonline.com',
    'email'        => 'nguyenxuan.luan@jonckers.com',
    'controllers' => [
        'wo_help_view'    => ModuleAdminController\HelpController::class,
        'wo_job_view'    => ModuleAdminController\JobController::class,
        'wo_log_view'    => ModuleAdminController\LogController::class
    ],
    'templates' => [],
    'events' => [
        'onActivate' => ModuleCore\Installer::class . '::onActivate',
        'onDeactivate' =>  ModuleCore\Installer::class . '::onDeactivate',
    ],
    'settings' => [
        [
            'group' => 'SETTINGS',
            'name' => 'wo_project_id',
            'type' => 'str',
            'value' => ''
        ],
        [
            'group' => 'SETTINGS',
            'name' => 'wo_username',
            'type' => 'str',
            'value' => ''
        ],
        [
            'group' => 'SETTINGS',
            'name'  => 'wo_password',
            'type'  => 'str',
            'value' => ''
        ],
    ]
];

?>