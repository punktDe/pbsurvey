<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');

	// get extension confArr
$arrConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['pbsurvey']);
	// disable/enable adding of text (copy[*]) to text of copied records
$blnPrependAtCopy = $arrConfiguration['prependAtCopy']?'LLL:EXT:lang/locallang_general.php:LGL.prependAtCopy':' ';

$TCA['tx_pbsurvey_item'] = array (
	'ctrl' => array (
		'title' => 'LLL:EXT:pbsurvey/lang/locallang_db.xml:tx_pbsurvey_item',		
		'label' => 'question',
		'label_alt' => 'question_type',	
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'prependAtCopy' => $blnPrependAtCopy,
		'useColumnsForDefaultValues' => 'type',
		'transOrigPointerField' => 'l18n_parent',
		'transOrigDiffSourceField' => 'l18n_diffsource',
		'languageField' => 'sys_language_uid',
		'type' => 'question_type',
		'typeicon_column' => 'question_type',	
		'typeicons' => array (
			'0' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_pbsurvey_item.gif',
			'1' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_1.gif',
			'2' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_2.gif',
			'3' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_3.gif',
			'4' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_4.gif',
			'5' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_5.gif',
			'6' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_6.gif',
			'7' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_7.gif',
			'8' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_8.gif',
			'9' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_9.gif',
			'10' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_10.gif',
			'11' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_11.gif',
			'12' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_12.gif',
			'13' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_13.gif',
			'14' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_14.gif',
			'15' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_15.gif',
			'16' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_16.gif',
			'17' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_17.gif',
			'18' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_18.gif',
			'19' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_19.gif',
			'20' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_20.gif',
			'21' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_21.gif',
			'22' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_pbsurvey_item_22.gif',
		),
		'sortby' => 'sorting',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_pbsurvey_item.gif',
	),
//	'feInterface' => array (
//		'fe_admin_fieldList' => 'hidden,question_type,question,question_alias,question_subtext,page_title,page_introduction,options_required,options_random,options_alignment,options_minimum_responses,options_maximum_responses,answers,answers_allow_additionional,answers_type_additional',
//	)
);

$TCA['tx_pbsurvey_results'] = array (
	'ctrl' => array (
		'title' => 'LLL:EXT:pbsurvey/lang/locallang_db.xml:tx_pbsurvey_results',		
		'label' => 'uid',	
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',	
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_pbsurvey_results.gif',
	),
);

$TCA['tx_pbsurvey_answers'] = array (
	'ctrl' => array (
		'title' => 'LLL:EXT:pbsurvey/lang/locallang_db.xml:tx_pbsurvey_answers',		
		'label' => 'question',	
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'delete' => 'deleted',	
		'enablecolumns' => array (		
			'disabled' => 'hidden',
		),
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY).'tca.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY).'icons/icon_tx_pbsurvey_results.gif',
	),
);

t3lib_div::loadTCA('tt_content');
	// Exclude fields from displaying and add FlexForm content
$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']='layout,select_key,pages,recursive';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY.'_pi1']='pi_flexform';

	// Add tablename to default list of allowed tables on pages. Otherwise only in SysFolders
t3lib_extMgm::allowTableOnStandardPages('tx_pbsurvey_item');
t3lib_extMgm::allowTableOnStandardPages('tx_pbsurvey_results');
t3lib_extMgm::allowTableOnStandardPages('tx_pbsurvey_answers');
	// Adds Questionaire to the list of plugins in content elements of type 'Insert plugin'
t3lib_extMgm::addPlugin(array('LLL:EXT:pbsurvey/lang/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY.'_pi1'),'list_type');
	// Adds an entry to the 'ds' array of the tt_content field 'pi_flexform'.
t3lib_extMgm::addPiFlexFormValue('pbsurvey_pi1', 'FILE:EXT:pbsurvey/flexform_ds.xml');
	// initalize 'context sensitive help' (csh)
t3lib_extMgm::addLLrefForTCAdescr('tx_pbsurvey_item','EXT:pbsurvey/csh/locallang_pbsurvey_item.xml');
t3lib_extMgm::addLLrefForTCAdescr('tx_pbsurvey_results','EXT:pbsurvey/csh/locallang_pbsurvey_results.xml');
t3lib_extMgm::addLLrefForTCAdescr('tx_pbsurvey_answers','EXT:pbsurvey/csh/locallang_pbsurvey_answers.xml');
t3lib_extMgm::addLLrefForTCAdescr('xEXT_pbsurvey','EXT:pbsurvey/csh/locallang_manual.xml');
t3lib_extMgm::addLLrefForTCAdescr('_MOD_web_txpbsurveyM1','EXT:pbsurvey/csh/locallang_mod1.xml');
t3lib_extMgm::addLLrefForTCAdescr('_MOD_web_txpbsurveyM1','EXT:pbsurvey/csh/locallang_modfunc1.xml');

if (TYPO3_MODE=='BE') {
	// initialize Module
	$TBE_MODULES_EXT['xMOD_db_new_content_el']['addElClasses']['tx_pbsurvey_pi1_wizicon'] = t3lib_extMgm::extPath($_EXTKEY).'pi1/class.tx_pbsurvey_pi1_wizicon.php';
	t3lib_extMgm::addModule('web','txpbsurveyM1','',t3lib_extMgm::extPath($_EXTKEY).'mod1/');
	t3lib_extMgm::insertModuleFunction('web_txpbsurveyM1','tx_pbsurvey_modfunc1',t3lib_extMgm::extPath($_EXTKEY).'modfunc1/class.tx_pbsurvey_modfunc1.php','LLL:EXT:pbsurvey/lang/locallang_modfunc1.xml:moduleFunction');
	// class for displaying the answers in BE results forms.
	//include_once(t3lib_extMgm::extPath($_EXTKEY).'class.tx_pbsurvey_answers.php');
	// user class to display wizards in the form
	//include_once(t3lib_extMgm::extPath($_EXTKEY).'class.tx_pbsurvey_wizards.php');
}
?>