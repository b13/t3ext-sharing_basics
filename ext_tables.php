<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}
$tempColumns = array (
	'tx_sharingbasics_title' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:sharing_basics/locallang_db.xml:pages.tx_sharingbasics_title',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',
		)
	),
	'tx_sharingbasics_description' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:sharing_basics/locallang_db.xml:pages.tx_sharingbasics_description',		
		'config' => array (
			'type' => 'text',
			'cols' => '30',	
			'rows' => '5',
		)
	),
	'tx_sharingbasics_media' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:sharing_basics/locallang_db.xml:pages.tx_sharingbasics_media',		
		'config' => array (
			'type' => 'group',
			'internal_type' => 'file',
			'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],	
			'max_size' => $GLOBALS['TYPO3_CONF_VARS']['BE']['maxFileSize'],	
			'uploadfolder' => 'uploads/tx_sharingbasics',
			'show_thumbs' => 1,	
			'size' => 5,	
			'minitems' => 0,
			'maxitems' => 5,
		)
	),
);


t3lib_div::loadTCA('pages');
t3lib_extMgm::addTCAcolumns('pages',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages','--div--;Sharing, tx_sharingbasics_title;;;;1-1-1, tx_sharingbasics_description, tx_sharingbasics_media','1');

$tempColumns = array (
	'tx_sharingbasics_title' => array (		
		'exclude' => 1,		
		'label' => 'LLL:EXT:sharing_basics/locallang_db.xml:pages_language_overlay.tx_sharingbasics_title',		
		'config' => array (
			'type' => 'input',	
			'size' => '30',
		)
	),
	'tx_sharingbasics_description' => array (		
		'exclude' => 0,		
		'label' => 'LLL:EXT:sharing_basics/locallang_db.xml:pages_language_overlay.tx_sharingbasics_description',		
		'config' => array (
			'type' => 'text',
			'cols' => '30',	
			'rows' => '5',
		)
	),
);


t3lib_div::loadTCA('pages_language_overlay');
t3lib_extMgm::addTCAcolumns('pages_language_overlay',$tempColumns,1);
t3lib_extMgm::addToAllTCAtypes('pages_language_overlay','--div--;Sharing, tx_sharingbasics_title;;;;1-1-1, tx_sharingbasics_description','1');

t3lib_extMgm::addStaticFile($_EXTKEY,'static/', 'Sharing Basics Meta-Tags');
?>