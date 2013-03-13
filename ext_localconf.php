<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

	// adding th tx_sharingbasics-fields to the pageOverlayFields so it is recognized when fetching the overlay fields
$TYPO3_CONF_VARS['FE']['pageOverlayFields'] .= ',tx_sharingbasics_title,tx_sharingbasics_description';

$extconf = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['sharing_basics']);


?>
