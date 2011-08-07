<?php

########################################################################
# Extension Manager/Repository config file for ext "pbsurvey".
#
# Auto generated 07-08-2011 19:48
#
# Manual updates:
# Only the data in the array - everything else is removed by next
# writing. "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Questionaire',
	'description' => 'Questionaire is an extension to take surveys from the visitors of your website. The results can be exported to a csv-file to analyze in Microsoft Excel or the statistical program SPSS or it\'s open source concurrent PSPP.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.3.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'wizard,wizard2,mod1',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Patrick Broens',
	'author_email' => 'patrick@patrickbroens.nl',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'php' => '4.0.0-0.0.0',
			'typo3' => '3.8.1-0.0.0',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:144:{s:9:"Changelog";s:4:"a254";s:11:"DBmodel.xml";s:4:"1296";s:29:"class.tx_pbsurvey_answers.php";s:4:"6af3";s:21:"ext_conf_template.txt";s:4:"4ddb";s:12:"ext_icon.gif";s:4:"e008";s:17:"ext_localconf.php";s:4:"d32c";s:15:"ext_php_api.dat";s:4:"f350";s:14:"ext_tables.php";s:4:"0a53";s:14:"ext_tables.sql";s:4:"e340";s:28:"ext_typoscript_constants.txt";s:4:"34f5";s:24:"ext_typoscript_setup.txt";s:4:"c12d";s:15:"flexform_ds.xml";s:4:"1960";s:7:"tca.php";s:4:"4ea3";s:34:"csh/de.locallang_pbsurvey_item.xml";s:4:"f270";s:37:"csh/de.locallang_pbsurvey_results.xml";s:4:"c81d";s:24:"csh/locallang_manual.xml";s:4:"e8f7";s:22:"csh/locallang_mod1.xml";s:4:"3150";s:26:"csh/locallang_modfunc1.xml";s:4:"3f6a";s:34:"csh/locallang_pbsurvey_answers.xml";s:4:"4211";s:31:"csh/locallang_pbsurvey_item.xml";s:4:"0535";s:34:"csh/locallang_pbsurvey_results.xml";s:4:"9bd1";s:27:"csh/nl.locallang_manual.xml";s:4:"29e9";s:25:"csh/nl.locallang_mod1.xml";s:4:"c05a";s:29:"csh/nl.locallang_modfunc1.xml";s:4:"5e18";s:34:"csh/nl.locallang_pbsurvey_item.xml";s:4:"b80f";s:37:"csh/nl.locallang_pbsurvey_results.xml";s:4:"bd07";s:27:"csh/no.locallang_manual.xml";s:4:"a7f1";s:34:"csh/no.locallang_pbsurvey_item.xml";s:4:"4500";s:37:"csh/no.locallang_pbsurvey_results.xml";s:4:"9d68";s:35:"csh/images/manual_step-1-2-3_en.png";s:4:"3ea0";s:32:"csh/images/manual_step-11_en.png";s:4:"62f5";s:32:"csh/images/manual_step-12_en.png";s:4:"0d71";s:32:"csh/images/manual_step-13_en.png";s:4:"f0d5";s:35:"csh/images/manual_step-14-15_en.png";s:4:"67cb";s:32:"csh/images/manual_step-16_en.png";s:4:"8068";s:32:"csh/images/manual_step-19_en.png";s:4:"e1fd";s:31:"csh/images/manual_step-4_en.png";s:4:"3a4e";s:31:"csh/images/manual_step-5_en.png";s:4:"22d7";s:31:"csh/images/manual_step-6_en.png";s:4:"7760";s:38:"csh/images/manual_step-7-8-9-10_en.png";s:4:"d5f9";s:12:"doc/TODO.txt";s:4:"be81";s:14:"doc/manual.sxw";s:4:"e5f2";s:19:"icons/icon_mod1.gif";s:4:"e008";s:30:"icons/icon_pbsurvey_item_1.gif";s:4:"7c6d";s:31:"icons/icon_pbsurvey_item_10.gif";s:4:"a672";s:34:"icons/icon_pbsurvey_item_10__h.gif";s:4:"6c57";s:31:"icons/icon_pbsurvey_item_11.gif";s:4:"345a";s:34:"icons/icon_pbsurvey_item_11__h.gif";s:4:"de98";s:31:"icons/icon_pbsurvey_item_12.gif";s:4:"4b03";s:34:"icons/icon_pbsurvey_item_12__h.gif";s:4:"83be";s:31:"icons/icon_pbsurvey_item_13.gif";s:4:"7fdb";s:34:"icons/icon_pbsurvey_item_13__h.gif";s:4:"d0d8";s:31:"icons/icon_pbsurvey_item_14.gif";s:4:"32ec";s:34:"icons/icon_pbsurvey_item_14__h.gif";s:4:"79ae";s:31:"icons/icon_pbsurvey_item_15.gif";s:4:"74c8";s:34:"icons/icon_pbsurvey_item_15__h.gif";s:4:"bdab";s:31:"icons/icon_pbsurvey_item_16.gif";s:4:"2e12";s:34:"icons/icon_pbsurvey_item_16__h.gif";s:4:"b07b";s:31:"icons/icon_pbsurvey_item_17.gif";s:4:"d50b";s:34:"icons/icon_pbsurvey_item_17__h.gif";s:4:"3a78";s:31:"icons/icon_pbsurvey_item_18.gif";s:4:"76dc";s:34:"icons/icon_pbsurvey_item_18__h.gif";s:4:"059f";s:31:"icons/icon_pbsurvey_item_19.gif";s:4:"4e22";s:34:"icons/icon_pbsurvey_item_19__h.gif";s:4:"16d2";s:33:"icons/icon_pbsurvey_item_1__h.gif";s:4:"025e";s:30:"icons/icon_pbsurvey_item_2.gif";s:4:"50e2";s:31:"icons/icon_pbsurvey_item_20.gif";s:4:"00a0";s:34:"icons/icon_pbsurvey_item_20__h.gif";s:4:"c9c4";s:31:"icons/icon_pbsurvey_item_21.gif";s:4:"f567";s:34:"icons/icon_pbsurvey_item_21__h.gif";s:4:"af11";s:31:"icons/icon_pbsurvey_item_22.gif";s:4:"9e8c";s:34:"icons/icon_pbsurvey_item_22__h.gif";s:4:"02f8";s:31:"icons/icon_pbsurvey_item_23.gif";s:4:"9ce5";s:34:"icons/icon_pbsurvey_item_23__h.gif";s:4:"44bc";s:33:"icons/icon_pbsurvey_item_2__h.gif";s:4:"284d";s:30:"icons/icon_pbsurvey_item_3.gif";s:4:"f92c";s:33:"icons/icon_pbsurvey_item_3__h.gif";s:4:"e3d3";s:30:"icons/icon_pbsurvey_item_4.gif";s:4:"8d28";s:33:"icons/icon_pbsurvey_item_4__h.gif";s:4:"d380";s:30:"icons/icon_pbsurvey_item_5.gif";s:4:"e78a";s:33:"icons/icon_pbsurvey_item_5__h.gif";s:4:"19a5";s:30:"icons/icon_pbsurvey_item_6.gif";s:4:"021e";s:33:"icons/icon_pbsurvey_item_6__h.gif";s:4:"463c";s:30:"icons/icon_pbsurvey_item_7.gif";s:4:"efc6";s:33:"icons/icon_pbsurvey_item_7__h.gif";s:4:"4ef9";s:30:"icons/icon_pbsurvey_item_8.gif";s:4:"3b38";s:33:"icons/icon_pbsurvey_item_8__h.gif";s:4:"ad0a";s:30:"icons/icon_pbsurvey_item_9.gif";s:4:"bc7d";s:33:"icons/icon_pbsurvey_item_9__h.gif";s:4:"09cb";s:31:"icons/icon_tx_pbsurvey_item.gif";s:4:"e008";s:34:"icons/icon_tx_pbsurvey_item__h.gif";s:4:"9c93";s:34:"icons/icon_tx_pbsurvey_results.gif";s:4:"6904";s:37:"icons/icon_tx_pbsurvey_results__h.gif";s:4:"0698";s:21:"icons/icon_wizard.gif";s:4:"ffe3";s:20:"icons/survey_wiz.gif";s:4:"ac20";s:21:"lang/de.locallang.xml";s:4:"5cc3";s:24:"lang/de.locallang_db.xml";s:4:"12f4";s:26:"lang/de.locallang_mod1.xml";s:4:"a91e";s:25:"lang/de.locallang_wiz.xml";s:4:"d278";s:21:"lang/dk.locallang.xml";s:4:"e7ac";s:24:"lang/dk.locallang_db.xml";s:4:"c48f";s:26:"lang/dk.locallang_mod1.xml";s:4:"bfcf";s:25:"lang/dk.locallang_wiz.xml";s:4:"16a9";s:21:"lang/fr.locallang.xml";s:4:"38b3";s:24:"lang/fr.locallang_db.xml";s:4:"7606";s:26:"lang/fr.locallang_mod1.xml";s:4:"59b4";s:25:"lang/fr.locallang_wiz.xml";s:4:"9071";s:18:"lang/locallang.xml";s:4:"1302";s:21:"lang/locallang_db.xml";s:4:"74be";s:23:"lang/locallang_mod1.xml";s:4:"9b09";s:27:"lang/locallang_modfunc1.xml";s:4:"1176";s:22:"lang/locallang_wiz.xml";s:4:"33f9";s:21:"lang/nl.locallang.xml";s:4:"796a";s:24:"lang/nl.locallang_db.xml";s:4:"a073";s:26:"lang/nl.locallang_mod1.xml";s:4:"3c4b";s:30:"lang/nl.locallang_modfunc1.xml";s:4:"a6a1";s:25:"lang/nl.locallang_wiz.xml";s:4:"d098";s:21:"lang/no.locallang.xml";s:4:"a663";s:24:"lang/no.locallang_db.xml";s:4:"a64b";s:26:"lang/no.locallang_mod1.xml";s:4:"0f6f";s:25:"lang/no.locallang_wiz.xml";s:4:"8dc7";s:13:"mod1/conf.php";s:4:"cf06";s:14:"mod1/index.php";s:4:"27d5";s:39:"modfunc1/class.tx_pbsurvey_modfunc1.php";s:4:"42f0";s:29:"pi1/class.tx_pbsurvey_pi1.php";s:4:"e0a7";s:37:"pi1/class.tx_pbsurvey_pi1_wizicon.php";s:4:"1918";s:20:"pi1/de.locallang.xml";s:4:"517d";s:20:"pi1/dk.locallang.xml";s:4:"4c14";s:20:"pi1/es.locallang.xml";s:4:"cc69";s:20:"pi1/fi.locallang.xml";s:4:"c313";s:20:"pi1/fr.locallang.xml";s:4:"74f0";s:20:"pi1/hk.locallang.xml";s:4:"20fd";s:20:"pi1/it.locallang.xml";s:4:"5967";s:17:"pi1/locallang.xml";s:4:"182f";s:20:"pi1/nl.locallang.xml";s:4:"28ba";s:20:"pi1/no.locallang.xml";s:4:"1b01";s:17:"pi1/template.html";s:4:"dc01";s:20:"static/css/setup.txt";s:4:"9ace";s:15:"wizard/conf.php";s:4:"e95c";s:15:"wizard/init.php";s:4:"6e5d";s:25:"wizard/wizard_answers.php";s:4:"6652";s:16:"wizard2/conf.php";s:4:"e35a";s:16:"wizard2/init.php";s:4:"6e5d";s:29:"wizard2/wizard_conditions.php";s:4:"db07";}',
);

?>