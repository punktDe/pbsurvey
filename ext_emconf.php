<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "pbsurvey".
 *
 * Auto generated 02-02-2013 20:02
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Questionaire',
	'description' => 'Questionaire is an extension to take surveys from the visitors of your website. The results can be exported to a csv-file to analyze in Microsoft Excel or the statistical program SPSS or it\'s open source concurrent PSPP.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.4.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'wizard,wizard2,mod1',
	'state' => 'stable',
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
			'php' => '4.0.0-5.4.99',
			'typo3' => '3.8.1-6.0.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'_md5_values_when_last_written' => 'a:114:{s:9:"Changelog";s:4:"2c03";s:29:"class.tx_pbsurvey_answers.php";s:4:"fce2";s:11:"DBmodel.xml";s:4:"a6a5";s:21:"ext_conf_template.txt";s:4:"56bb";s:12:"ext_icon.gif";s:4:"e008";s:17:"ext_localconf.php";s:4:"b054";s:15:"ext_php_api.dat";s:4:"f350";s:14:"ext_tables.php";s:4:"f4d8";s:14:"ext_tables.sql";s:4:"cc74";s:28:"ext_typoscript_constants.txt";s:4:"734e";s:24:"ext_typoscript_setup.txt";s:4:"5def";s:15:"flexform_ds.xml";s:4:"bc8a";s:7:"tca.php";s:4:"9eeb";s:34:"csh/de.locallang_pbsurvey_item.xml";s:4:"38c9";s:37:"csh/de.locallang_pbsurvey_results.xml";s:4:"7a3c";s:24:"csh/locallang_manual.xml";s:4:"e8f7";s:22:"csh/locallang_mod1.xml";s:4:"3150";s:26:"csh/locallang_modfunc1.xml";s:4:"3f6a";s:34:"csh/locallang_pbsurvey_answers.xml";s:4:"4211";s:31:"csh/locallang_pbsurvey_item.xml";s:4:"0aae";s:34:"csh/locallang_pbsurvey_results.xml";s:4:"c6e6";s:27:"csh/nl.locallang_manual.xml";s:4:"29e9";s:25:"csh/nl.locallang_mod1.xml";s:4:"c05a";s:29:"csh/nl.locallang_modfunc1.xml";s:4:"5e18";s:34:"csh/nl.locallang_pbsurvey_item.xml";s:4:"e1b4";s:37:"csh/nl.locallang_pbsurvey_results.xml";s:4:"dc75";s:27:"csh/no.locallang_manual.xml";s:4:"9beb";s:34:"csh/no.locallang_pbsurvey_item.xml";s:4:"acec";s:37:"csh/no.locallang_pbsurvey_results.xml";s:4:"5e5a";s:35:"csh/images/manual_step-1-2-3_en.png";s:4:"3ea0";s:32:"csh/images/manual_step-11_en.png";s:4:"62f5";s:32:"csh/images/manual_step-12_en.png";s:4:"0d71";s:32:"csh/images/manual_step-13_en.png";s:4:"f0d5";s:35:"csh/images/manual_step-14-15_en.png";s:4:"67cb";s:32:"csh/images/manual_step-16_en.png";s:4:"8068";s:32:"csh/images/manual_step-19_en.png";s:4:"e1fd";s:31:"csh/images/manual_step-4_en.png";s:4:"3a4e";s:31:"csh/images/manual_step-5_en.png";s:4:"22d7";s:31:"csh/images/manual_step-6_en.png";s:4:"7760";s:38:"csh/images/manual_step-7-8-9-10_en.png";s:4:"d5f9";s:14:"doc/manual.sxw";s:4:"8072";s:12:"doc/TODO.txt";s:4:"e12f";s:19:"icons/icon_mod1.gif";s:4:"e008";s:30:"icons/icon_pbsurvey_item_1.gif";s:4:"7c6d";s:31:"icons/icon_pbsurvey_item_10.gif";s:4:"a672";s:34:"icons/icon_pbsurvey_item_10__h.gif";s:4:"6c57";s:31:"icons/icon_pbsurvey_item_11.gif";s:4:"345a";s:34:"icons/icon_pbsurvey_item_11__h.gif";s:4:"de98";s:31:"icons/icon_pbsurvey_item_12.gif";s:4:"4b03";s:34:"icons/icon_pbsurvey_item_12__h.gif";s:4:"83be";s:31:"icons/icon_pbsurvey_item_13.gif";s:4:"7fdb";s:34:"icons/icon_pbsurvey_item_13__h.gif";s:4:"d0d8";s:31:"icons/icon_pbsurvey_item_14.gif";s:4:"32ec";s:34:"icons/icon_pbsurvey_item_14__h.gif";s:4:"79ae";s:31:"icons/icon_pbsurvey_item_15.gif";s:4:"74c8";s:34:"icons/icon_pbsurvey_item_15__h.gif";s:4:"bdab";s:31:"icons/icon_pbsurvey_item_16.gif";s:4:"2e12";s:34:"icons/icon_pbsurvey_item_16__h.gif";s:4:"b07b";s:31:"icons/icon_pbsurvey_item_17.gif";s:4:"d50b";s:34:"icons/icon_pbsurvey_item_17__h.gif";s:4:"3a78";s:31:"icons/icon_pbsurvey_item_18.gif";s:4:"76dc";s:34:"icons/icon_pbsurvey_item_18__h.gif";s:4:"059f";s:31:"icons/icon_pbsurvey_item_19.gif";s:4:"4e22";s:34:"icons/icon_pbsurvey_item_19__h.gif";s:4:"16d2";s:33:"icons/icon_pbsurvey_item_1__h.gif";s:4:"025e";s:30:"icons/icon_pbsurvey_item_2.gif";s:4:"50e2";s:31:"icons/icon_pbsurvey_item_20.gif";s:4:"00a0";s:34:"icons/icon_pbsurvey_item_20__h.gif";s:4:"c9c4";s:31:"icons/icon_pbsurvey_item_21.gif";s:4:"f567";s:34:"icons/icon_pbsurvey_item_21__h.gif";s:4:"af11";s:31:"icons/icon_pbsurvey_item_22.gif";s:4:"9e8c";s:34:"icons/icon_pbsurvey_item_22__h.gif";s:4:"02f8";s:31:"icons/icon_pbsurvey_item_23.gif";s:4:"9ce5";s:34:"icons/icon_pbsurvey_item_23__h.gif";s:4:"44bc";s:33:"icons/icon_pbsurvey_item_2__h.gif";s:4:"284d";s:30:"icons/icon_pbsurvey_item_3.gif";s:4:"f92c";s:33:"icons/icon_pbsurvey_item_3__h.gif";s:4:"e3d3";s:30:"icons/icon_pbsurvey_item_4.gif";s:4:"8d28";s:33:"icons/icon_pbsurvey_item_4__h.gif";s:4:"d380";s:30:"icons/icon_pbsurvey_item_5.gif";s:4:"e78a";s:33:"icons/icon_pbsurvey_item_5__h.gif";s:4:"19a5";s:30:"icons/icon_pbsurvey_item_6.gif";s:4:"021e";s:33:"icons/icon_pbsurvey_item_6__h.gif";s:4:"463c";s:30:"icons/icon_pbsurvey_item_7.gif";s:4:"efc6";s:33:"icons/icon_pbsurvey_item_7__h.gif";s:4:"4ef9";s:30:"icons/icon_pbsurvey_item_8.gif";s:4:"3b38";s:33:"icons/icon_pbsurvey_item_8__h.gif";s:4:"ad0a";s:30:"icons/icon_pbsurvey_item_9.gif";s:4:"bc7d";s:33:"icons/icon_pbsurvey_item_9__h.gif";s:4:"09cb";s:31:"icons/icon_tx_pbsurvey_item.gif";s:4:"e008";s:34:"icons/icon_tx_pbsurvey_item__h.gif";s:4:"9c93";s:34:"icons/icon_tx_pbsurvey_results.gif";s:4:"6904";s:37:"icons/icon_tx_pbsurvey_results__h.gif";s:4:"0698";s:21:"icons/icon_wizard.gif";s:4:"ffe3";s:20:"icons/survey_wiz.gif";s:4:"ac20";s:18:"lang/locallang.xml";s:4:"2445";s:21:"lang/locallang_db.xml";s:4:"4797";s:23:"lang/locallang_mod1.xml";s:4:"563f";s:27:"lang/locallang_modfunc1.xml";s:4:"b87b";s:22:"lang/locallang_wiz.xml";s:4:"5680";s:13:"mod1/conf.php";s:4:"5a4a";s:14:"mod1/index.php";s:4:"2ec8";s:39:"modfunc1/class.tx_pbsurvey_modfunc1.php";s:4:"fdff";s:29:"pi1/class.tx_pbsurvey_pi1.php";s:4:"3132";s:37:"pi1/class.tx_pbsurvey_pi1_wizicon.php";s:4:"1918";s:17:"pi1/locallang.xml";s:4:"a979";s:17:"pi1/template.html";s:4:"48b8";s:20:"static/css/setup.txt";s:4:"fb06";s:15:"wizard/conf.php";s:4:"73d4";s:15:"wizard/init.php";s:4:"75ba";s:25:"wizard/wizard_answers.php";s:4:"22cd";s:16:"wizard2/conf.php";s:4:"1647";s:16:"wizard2/init.php";s:4:"75ba";s:29:"wizard2/wizard_conditions.php";s:4:"1413";}',
	'suggests' => array(
	),
);

?>