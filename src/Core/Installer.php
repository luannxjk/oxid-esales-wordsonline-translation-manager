<?php

namespace WordsOnline\TranslationManager\Core;

use OxidEsales\Eshop\Core\DatabaseProvider;

 class Installer
{
    public static function onActivate() {
        self::_createProjectTable();
        return;
    }
    public static function onDeactivate() {
         return;
    }

    /**
     * Create a db table for project entity.
     */
    private static function _createProjectTable()
    {

        $sCreateJobTable = "CREATE TABLE IF NOT EXISTS `wo_job` (
          `OXID` char(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Unique Project ID',
          `OXSHOPID` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Shop ID',
          `NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Job name',
          `LANG_ORIGIN` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Original language',
          `LANG_TARGET` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Target languages',
          `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp when created',
          `UPDATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Timestamp when updated',
          `STATUS` int(11) NOT NULL DEFAULT '0' COMMENT 'Project status',
          `ID` int(11) NOT NULL AUTO_INCREMENT,
          `PROJECT_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
          `REQUEST_ID` varchar(255) COLLATE utf8mb4_unicode_ci COMMENT 'Request guid from WordsOnline',
          PRIMARY KEY (`ID`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

        DatabaseProvider::getDb()->execute($sCreateJobTable);

        $sCreateJobItemTable = "CREATE TABLE IF NOT EXISTS `wo_job_items` (
          `JOB_ID` int(11) NOT NULL NOT NULL,
          `ID` int(11) NOT NULL AUTO_INCREMENT,
          `TABLE_ID` char(32) COLLATE utf8mb4_unicode_ci NOT NULL,
          `TABLE_NAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'table name',
          `STATUS` int(11) NOT NULL DEFAULT '0',
          PRIMARY KEY (`ID`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

        DatabaseProvider::getDb()->execute($sCreateJobItemTable);

        $sCreateConfigTable = "CREATE TABLE IF NOT EXISTS `wo_config` (
          `ID` int(11) NOT NULL AUTO_INCREMENT,
          `PROJECT_ID` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
          `USERNAME` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
          `PASSWORD` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,        
          PRIMARY KEY (`ID`)
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";

        DatabaseProvider::getDb()->execute($sCreateConfigTable);

        $sCreateLogTable = "CREATE TABLE IF NOT EXISTS `wo_log` (
            `ID` int(11) NOT NULL AUTO_INCREMENT,
            `JOB_ID` int(11) NOT NULL,
            `DESCRIPTION` LONGTEXT,
            `CREATED_AT` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp when created',
            PRIMARY KEY (`ID`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
  
          DatabaseProvider::getDb()->execute($sCreateLogTable);

       
    }
}