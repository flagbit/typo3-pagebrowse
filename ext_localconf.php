<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43(
    'pagebrowse',
    'Classes/PageBrowse.php',
    '_pi1',
    'list_type',
    1
);
