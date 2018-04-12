<?php
if (!defined ('TYPO3_MODE')) die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY, 'Classes/PageBrowse.php', '_pi1', 'list_type', 1);