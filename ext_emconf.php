<?php

########################################################################
# Extension Manager/Repository config file for ext: "pbsurvey"
# 
# Auto generated 09-01-2006 19:06
# 
# Manual updates:
# Only the data in the array - anything else is removed by next write
########################################################################

$EM_CONF[$_EXTKEY] = Array (
	'title' => 'Questionaire',
	'description' => 'Questionaire is an extension to take surveys from the visitors of your website. The results can be exported to a csv-file to analyze in Microsoft Excel or the statistical program SPSS or it\'s open source concurrent PSPP.',
	'category' => 'plugin',
	'shy' => 0,
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'TYPO3_version' => '0.0.3-0.0.3',
	'PHP_version' => '0.0.3-0.0.3',
	'module' => 'wizard,wizard2,mod1',
	'state' => 'stable',
	'internal' => 0,
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_pbsurvey/',
	'modify_tables' => '',
	'clearCacheOnLoad' => 1,
	'lockType' => '',
	'author' => 'Patrick Broens',
	'author_email' => 'patrick@patrickbroens.nl',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'private' => 0,
	'download_password' => '',
	'version' => '0.1.6',	// Don't modify this! Managed automatically during upload to repository.
	'_md5_values_when_last_written' => 'a:130:{s:8:".project";s:4:"3982";s:29:"class.tx_pbsurvey_answers.php";s:4:"fce2";s:21:"ext_conf_template.txt";s:4:"8a3d";s:12:"ext_icon.gif";s:4:"e008";s:17:"ext_localconf.php";s:4:"052a";s:14:"ext_tables.php";s:4:"5b5b";s:14:"ext_tables.sql";s:4:"aa9f";s:28:"ext_typoscript_constants.txt";s:4:"58e5";s:24:"ext_typoscript_setup.txt";s:4:"9af5";s:15:"flexform_ds.xml";s:4:"9d19";s:7:"tca.php";s:4:"e847";s:34:"csh/de.locallang_pbsurvey_item.xml";s:4:"f270";s:37:"csh/de.locallang_pbsurvey_results.xml";s:4:"c81d";s:24:"csh/locallang_manual.xml";s:4:"bd67";s:34:"csh/locallang_pbsurvey_answers.xml";s:4:"cb7c";s:31:"csh/locallang_pbsurvey_item.xml";s:4:"300e";s:34:"csh/locallang_pbsurvey_results.xml";s:4:"9820";s:27:"csh/nl.locallang_manual.xml";s:4:"9090";s:34:"csh/nl.locallang_pbsurvey_item.xml";s:4:"b80f";s:37:"csh/nl.locallang_pbsurvey_results.xml";s:4:"bd07";s:27:"csh/no.locallang_manual.xml";s:4:"a7f1";s:34:"csh/no.locallang_pbsurvey_item.xml";s:4:"4500";s:37:"csh/no.locallang_pbsurvey_results.xml";s:4:"9d68";s:35:"csh/images/manual_step-1-2-3_en.png";s:4:"3ea0";s:32:"csh/images/manual_step-11_en.png";s:4:"62f5";s:32:"csh/images/manual_step-12_en.png";s:4:"0d71";s:32:"csh/images/manual_step-13_en.png";s:4:"f0d5";s:35:"csh/images/manual_step-14-15_en.png";s:4:"67cb";s:32:"csh/images/manual_step-16_en.png";s:4:"8068";s:32:"csh/images/manual_step-19_en.png";s:4:"e1fd";s:31:"csh/images/manual_step-4_en.png";s:4:"3a4e";s:31:"csh/images/manual_step-5_en.png";s:4:"22d7";s:31:"csh/images/manual_step-6_en.png";s:4:"7760";s:38:"csh/images/manual_step-7-8-9-10_en.png";s:4:"d5f9";s:14:"doc/manual.sxw";s:4:"d960";s:19:"icons/icon_mod1.gif";s:4:"e008";s:30:"icons/icon_pbsurvey_item_1.gif";s:4:"7c6d";s:31:"icons/icon_pbsurvey_item_10.gif";s:4:"a672";s:34:"icons/icon_pbsurvey_item_10__h.gif";s:4:"6c57";s:31:"icons/icon_pbsurvey_item_11.gif";s:4:"345a";s:34:"icons/icon_pbsurvey_item_11__h.gif";s:4:"de98";s:31:"icons/icon_pbsurvey_item_12.gif";s:4:"4b03";s:34:"icons/icon_pbsurvey_item_12__h.gif";s:4:"83be";s:31:"icons/icon_pbsurvey_item_13.gif";s:4:"7fdb";s:34:"icons/icon_pbsurvey_item_13__h.gif";s:4:"d0d8";s:31:"icons/icon_pbsurvey_item_14.gif";s:4:"32ec";s:34:"icons/icon_pbsurvey_item_14__h.gif";s:4:"79ae";s:31:"icons/icon_pbsurvey_item_15.gif";s:4:"74c8";s:34:"icons/icon_pbsurvey_item_15__h.gif";s:4:"bdab";s:31:"icons/icon_pbsurvey_item_16.gif";s:4:"2e12";s:34:"icons/icon_pbsurvey_item_16__h.gif";s:4:"b07b";s:31:"icons/icon_pbsurvey_item_17.gif";s:4:"d50b";s:34:"icons/icon_pbsurvey_item_17__h.gif";s:4:"3a78";s:31:"icons/icon_pbsurvey_item_18.gif";s:4:"76dc";s:34:"icons/icon_pbsurvey_item_18__h.gif";s:4:"059f";s:31:"icons/icon_pbsurvey_item_19.gif";s:4:"4e22";s:34:"icons/icon_pbsurvey_item_19__h.gif";s:4:"16d2";s:33:"icons/icon_pbsurvey_item_1__h.gif";s:4:"025e";s:30:"icons/icon_pbsurvey_item_2.gif";s:4:"50e2";s:31:"icons/icon_pbsurvey_item_20.gif";s:4:"00a0";s:34:"icons/icon_pbsurvey_item_20__h.gif";s:4:"c9c4";s:31:"icons/icon_pbsurvey_item_21.gif";s:4:"f567";s:34:"icons/icon_pbsurvey_item_21__h.gif";s:4:"af11";s:31:"icons/icon_pbsurvey_item_22.gif";s:4:"9e8c";s:34:"icons/icon_pbsurvey_item_22__h.gif";s:4:"02f8";s:33:"icons/icon_pbsurvey_item_2__h.gif";s:4:"284d";s:30:"icons/icon_pbsurvey_item_3.gif";s:4:"f92c";s:33:"icons/icon_pbsurvey_item_3__h.gif";s:4:"e3d3";s:30:"icons/icon_pbsurvey_item_4.gif";s:4:"8d28";s:33:"icons/icon_pbsurvey_item_4__h.gif";s:4:"d380";s:30:"icons/icon_pbsurvey_item_5.gif";s:4:"e78a";s:33:"icons/icon_pbsurvey_item_5__h.gif";s:4:"19a5";s:30:"icons/icon_pbsurvey_item_6.gif";s:4:"021e";s:33:"icons/icon_pbsurvey_item_6__h.gif";s:4:"463c";s:30:"icons/icon_pbsurvey_item_7.gif";s:4:"efc6";s:33:"icons/icon_pbsurvey_item_7__h.gif";s:4:"4ef9";s:30:"icons/icon_pbsurvey_item_8.gif";s:4:"3b38";s:33:"icons/icon_pbsurvey_item_8__h.gif";s:4:"ad0a";s:30:"icons/icon_pbsurvey_item_9.gif";s:4:"bc7d";s:33:"icons/icon_pbsurvey_item_9__h.gif";s:4:"09cb";s:31:"icons/icon_tx_pbsurvey_item.gif";s:4:"e008";s:34:"icons/icon_tx_pbsurvey_item__h.gif";s:4:"9c93";s:34:"icons/icon_tx_pbsurvey_results.gif";s:4:"6904";s:37:"icons/icon_tx_pbsurvey_results__h.gif";s:4:"0698";s:21:"icons/icon_wizard.gif";s:4:"ffe3";s:20:"icons/survey_wiz.gif";s:4:"ac20";s:21:"lang/de.locallang.xml";s:4:"56c5";s:24:"lang/de.locallang_db.xml";s:4:"f311";s:26:"lang/de.locallang_mod2.xml";s:4:"3120";s:25:"lang/de.locallang_wiz.xml";s:4:"3b86";s:21:"lang/dk.locallang.xml";s:4:"e8a6";s:24:"lang/dk.locallang_db.xml";s:4:"c1d8";s:26:"lang/dk.locallang_mod2.xml";s:4:"5dda";s:25:"lang/dk.locallang_wiz.xml";s:4:"7dd4";s:21:"lang/fr.locallang.xml";s:4:"c14f";s:24:"lang/fr.locallang_db.xml";s:4:"32ad";s:26:"lang/fr.locallang_mod2.xml";s:4:"0506";s:25:"lang/fr.locallang_wiz.xml";s:4:"a203";s:18:"lang/locallang.xml";s:4:"63cb";s:21:"lang/locallang_db.xml";s:4:"83fa";s:23:"lang/locallang_mod1.xml";s:4:"9580";s:23:"lang/locallang_mod2.xml";s:4:"02e0";s:22:"lang/locallang_wiz.xml";s:4:"82c1";s:21:"lang/nl.locallang.xml";s:4:"ab02";s:24:"lang/nl.locallang_db.xml";s:4:"9d5c";s:26:"lang/nl.locallang_mod2.xml";s:4:"2048";s:25:"lang/nl.locallang_wiz.xml";s:4:"4a64";s:21:"lang/no.locallang.xml";s:4:"6044";s:24:"lang/no.locallang_db.xml";s:4:"6808";s:26:"lang/no.locallang_mod2.xml";s:4:"d9d5";s:25:"lang/no.locallang_wiz.xml";s:4:"7d70";s:13:"mod1/conf.php";s:4:"4e77";s:13:"mod2/conf.php";s:4:"fc33";s:14:"mod2/index.php";s:4:"524d";s:29:"pi1/class.tx_pbsurvey_pi1.php";s:4:"06fd";s:37:"pi1/class.tx_pbsurvey_pi1_wizicon.php";s:4:"bb39";s:20:"pi1/de.locallang.xml";s:4:"a387";s:20:"pi1/dk.locallang.xml";s:4:"47c4";s:20:"pi1/fi.locallang.xml";s:4:"c313";s:20:"pi1/fr.locallang.xml";s:4:"c2c2";s:17:"pi1/locallang.xml";s:4:"9eb7";s:20:"pi1/nl.locallang.xml";s:4:"420e";s:20:"pi1/no.locallang.xml";s:4:"ea33";s:17:"pi1/template.html";s:4:"d30e";s:15:"wizard/conf.php";s:4:"e95c";s:15:"wizard/init.php";s:4:"790a";s:25:"wizard/wizard_answers.php";s:4:"afed";s:16:"wizard2/conf.php";s:4:"e35a";s:16:"wizard2/init.php";s:4:"790a";s:29:"wizard2/wizard_conditions.php";s:4:"6c4b";}',
);

?>