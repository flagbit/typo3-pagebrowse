<?php
defined('TYPO3_MODE') || die();


\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'pagebrowse',
    'static/page_browser/',
    'Page browser'
);
