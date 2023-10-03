<?php

use WordsOnline\TranslationManager\Core as ModuleCore;

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
    'thumbnail'    => 'logo.png',
    'version'      => '1.0.0',
    'author'       => 'Jonckers Team',
    'url'          => 'https://www.wordsonline.com',
    'email'        => 'nguyenxuan.luan@jonckers.com',
    'controllers' => [],
    'templates' => [],
    'events' => [
        'onActivate' => ModuleCore\Installer::class . '::onActivate',
        'onDeactivate' =>  ModuleCore\Installer::class . '::onDeactivate',
    ],
    'settings' => []
];

?>