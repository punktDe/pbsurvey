<?php

########################################################################
# Extension Manager/Repository config file for ext: "pbsurvey"
#
# Auto generated 08-11-2006 21:38
#
# Manual updates:
# Only the data in the array - anything else is removed by next write.
# "version" and "dependencies" must not be touched!
########################################################################

$EM_CONF[$_EXTKEY] = array(
	'title' => 'Questionaire',
	'description' => 'Questionaire is an extension to take surveys from the visitors of your website. The results can be exported to a csv-file to analyze in Microsoft Excel or the statistical program SPSS or it\'s open source concurrent PSPP.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '1.0.9',
	'dependencies' => 'cms',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => 'wizard,wizard2,mod1',
	'state' => 'beta',
	'uploadfolder' => 1,
	'createDirs' => 'uploads/tx_pbsurvey/',
	'modify_tables' => '',
	'clearcacheonload' => 1,
	'lockType' => '',
	'author' => 'Patrick Broens',
	'author_email' => 'patrick@patrickbroens.nl',
	'author_company' => '',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
			'cms' => '',
			'php' => '4.0.0-',
			'typo3' => '3.8.1-',
		),
		'conflicts' => array(
		),
		'suggests' => array(
			'sr_freecap' => '',
		),
	),
	'_md5_values_when_last_written' => 'a:464:{s:9:"Changelog";s:4:"f1b2";s:11:"DBmodel.xml";s:4:"1296";s:29:"class.tx_pbsurvey_answers.php";s:4:"6af3";s:21:"ext_conf_template.txt";s:4:"df17";s:12:"ext_icon.gif";s:4:"e008";s:17:"ext_localconf.php";s:4:"d32c";s:15:"ext_php_api.dat";s:4:"f350";s:14:"ext_tables.php";s:4:"c45a";s:14:"ext_tables.sql";s:4:"8d5e";s:28:"ext_typoscript_constants.txt";s:4:"3aa3";s:24:"ext_typoscript_setup.txt";s:4:"c12d";s:15:"flexform_ds.xml";s:4:"19dc";s:7:"tca.php";s:4:"717d";s:16:".svn/all-wcprops";s:4:"d9ed";s:12:".svn/entries";s:4:"235e";s:11:".svn/format";s:4:"c30f";s:33:".svn/prop-base/Changelog.svn-base";s:4:"685f";s:53:".svn/prop-base/class.tx_pbsurvey_answers.php.svn-base";s:4:"685f";s:45:".svn/prop-base/ext_conf_template.txt.svn-base";s:4:"685f";s:38:".svn/prop-base/ext_emconf.php.svn-base";s:4:"685f";s:36:".svn/prop-base/ext_icon.gif.svn-base";s:4:"1131";s:41:".svn/prop-base/ext_localconf.php.svn-base";s:4:"685f";s:39:".svn/prop-base/ext_php_api.dat.svn-base";s:4:"1131";s:38:".svn/prop-base/ext_tables.php.svn-base";s:4:"685f";s:38:".svn/prop-base/ext_tables.sql.svn-base";s:4:"25e6";s:52:".svn/prop-base/ext_typoscript_constants.txt.svn-base";s:4:"685f";s:48:".svn/prop-base/ext_typoscript_setup.txt.svn-base";s:4:"685f";s:39:".svn/prop-base/flexform_ds.xml.svn-base";s:4:"685f";s:31:".svn/prop-base/tca.php.svn-base";s:4:"685f";s:33:".svn/text-base/Changelog.svn-base";s:4:"96ef";s:53:".svn/text-base/class.tx_pbsurvey_answers.php.svn-base";s:4:"fce2";s:45:".svn/text-base/ext_conf_template.txt.svn-base";s:4:"8a3d";s:38:".svn/text-base/ext_emconf.php.svn-base";s:4:"0472";s:36:".svn/text-base/ext_icon.gif.svn-base";s:4:"e008";s:41:".svn/text-base/ext_localconf.php.svn-base";s:4:"b054";s:39:".svn/text-base/ext_php_api.dat.svn-base";s:4:"f350";s:38:".svn/text-base/ext_tables.php.svn-base";s:4:"b9b9";s:38:".svn/text-base/ext_tables.sql.svn-base";s:4:"0124";s:52:".svn/text-base/ext_typoscript_constants.txt.svn-base";s:4:"e8aa";s:48:".svn/text-base/ext_typoscript_setup.txt.svn-base";s:4:"5def";s:39:".svn/text-base/flexform_ds.xml.svn-base";s:4:"6554";s:31:".svn/text-base/tca.php.svn-base";s:4:"df67";s:34:"csh/de.locallang_pbsurvey_item.xml";s:4:"f270";s:37:"csh/de.locallang_pbsurvey_results.xml";s:4:"c81d";s:24:"csh/locallang_manual.xml";s:4:"e8f7";s:22:"csh/locallang_mod1.xml";s:4:"3150";s:26:"csh/locallang_modfunc1.xml";s:4:"3f6a";s:34:"csh/locallang_pbsurvey_answers.xml";s:4:"4211";s:31:"csh/locallang_pbsurvey_item.xml";s:4:"e8da";s:34:"csh/locallang_pbsurvey_results.xml";s:4:"6fa6";s:27:"csh/nl.locallang_manual.xml";s:4:"29e9";s:25:"csh/nl.locallang_mod1.xml";s:4:"c05a";s:29:"csh/nl.locallang_modfunc1.xml";s:4:"5e18";s:34:"csh/nl.locallang_pbsurvey_item.xml";s:4:"b80f";s:37:"csh/nl.locallang_pbsurvey_results.xml";s:4:"bd07";s:27:"csh/no.locallang_manual.xml";s:4:"a7f1";s:34:"csh/no.locallang_pbsurvey_item.xml";s:4:"4500";s:37:"csh/no.locallang_pbsurvey_results.xml";s:4:"9d68";s:20:"csh/.svn/all-wcprops";s:4:"1922";s:16:"csh/.svn/entries";s:4:"4c7d";s:15:"csh/.svn/format";s:4:"c30f";s:58:"csh/.svn/prop-base/de.locallang_pbsurvey_item.xml.svn-base";s:4:"685f";s:61:"csh/.svn/prop-base/de.locallang_pbsurvey_results.xml.svn-base";s:4:"685f";s:48:"csh/.svn/prop-base/locallang_manual.xml.svn-base";s:4:"685f";s:46:"csh/.svn/prop-base/locallang_mod1.xml.svn-base";s:4:"685f";s:50:"csh/.svn/prop-base/locallang_modfunc1.xml.svn-base";s:4:"685f";s:58:"csh/.svn/prop-base/locallang_pbsurvey_answers.xml.svn-base";s:4:"685f";s:55:"csh/.svn/prop-base/locallang_pbsurvey_item.xml.svn-base";s:4:"685f";s:58:"csh/.svn/prop-base/locallang_pbsurvey_results.xml.svn-base";s:4:"685f";s:51:"csh/.svn/prop-base/nl.locallang_manual.xml.svn-base";s:4:"685f";s:49:"csh/.svn/prop-base/nl.locallang_mod1.xml.svn-base";s:4:"685f";s:53:"csh/.svn/prop-base/nl.locallang_modfunc1.xml.svn-base";s:4:"685f";s:58:"csh/.svn/prop-base/nl.locallang_pbsurvey_item.xml.svn-base";s:4:"685f";s:61:"csh/.svn/prop-base/nl.locallang_pbsurvey_results.xml.svn-base";s:4:"685f";s:51:"csh/.svn/prop-base/no.locallang_manual.xml.svn-base";s:4:"685f";s:58:"csh/.svn/prop-base/no.locallang_pbsurvey_item.xml.svn-base";s:4:"685f";s:61:"csh/.svn/prop-base/no.locallang_pbsurvey_results.xml.svn-base";s:4:"685f";s:58:"csh/.svn/text-base/de.locallang_pbsurvey_item.xml.svn-base";s:4:"38c9";s:61:"csh/.svn/text-base/de.locallang_pbsurvey_results.xml.svn-base";s:4:"7a3c";s:48:"csh/.svn/text-base/locallang_manual.xml.svn-base";s:4:"e8f7";s:46:"csh/.svn/text-base/locallang_mod1.xml.svn-base";s:4:"3150";s:50:"csh/.svn/text-base/locallang_modfunc1.xml.svn-base";s:4:"3f6a";s:58:"csh/.svn/text-base/locallang_pbsurvey_answers.xml.svn-base";s:4:"4211";s:55:"csh/.svn/text-base/locallang_pbsurvey_item.xml.svn-base";s:4:"e91c";s:58:"csh/.svn/text-base/locallang_pbsurvey_results.xml.svn-base";s:4:"b56d";s:51:"csh/.svn/text-base/nl.locallang_manual.xml.svn-base";s:4:"29e9";s:49:"csh/.svn/text-base/nl.locallang_mod1.xml.svn-base";s:4:"c05a";s:53:"csh/.svn/text-base/nl.locallang_modfunc1.xml.svn-base";s:4:"5e18";s:58:"csh/.svn/text-base/nl.locallang_pbsurvey_item.xml.svn-base";s:4:"e1b4";s:61:"csh/.svn/text-base/nl.locallang_pbsurvey_results.xml.svn-base";s:4:"dc75";s:51:"csh/.svn/text-base/no.locallang_manual.xml.svn-base";s:4:"9beb";s:58:"csh/.svn/text-base/no.locallang_pbsurvey_item.xml.svn-base";s:4:"acec";s:61:"csh/.svn/text-base/no.locallang_pbsurvey_results.xml.svn-base";s:4:"5e5a";s:35:"csh/images/manual_step-1-2-3_en.png";s:4:"3ea0";s:32:"csh/images/manual_step-11_en.png";s:4:"62f5";s:32:"csh/images/manual_step-12_en.png";s:4:"0d71";s:32:"csh/images/manual_step-13_en.png";s:4:"f0d5";s:35:"csh/images/manual_step-14-15_en.png";s:4:"67cb";s:32:"csh/images/manual_step-16_en.png";s:4:"8068";s:32:"csh/images/manual_step-19_en.png";s:4:"e1fd";s:31:"csh/images/manual_step-4_en.png";s:4:"3a4e";s:31:"csh/images/manual_step-5_en.png";s:4:"22d7";s:31:"csh/images/manual_step-6_en.png";s:4:"7760";s:38:"csh/images/manual_step-7-8-9-10_en.png";s:4:"d5f9";s:27:"csh/images/.svn/all-wcprops";s:4:"5a64";s:23:"csh/images/.svn/entries";s:4:"13d2";s:22:"csh/images/.svn/format";s:4:"c30f";s:59:"csh/images/.svn/prop-base/manual_step-1-2-3_en.png.svn-base";s:4:"1131";s:56:"csh/images/.svn/prop-base/manual_step-11_en.png.svn-base";s:4:"1131";s:56:"csh/images/.svn/prop-base/manual_step-12_en.png.svn-base";s:4:"1131";s:56:"csh/images/.svn/prop-base/manual_step-13_en.png.svn-base";s:4:"1131";s:59:"csh/images/.svn/prop-base/manual_step-14-15_en.png.svn-base";s:4:"1131";s:56:"csh/images/.svn/prop-base/manual_step-16_en.png.svn-base";s:4:"1131";s:56:"csh/images/.svn/prop-base/manual_step-19_en.png.svn-base";s:4:"1131";s:55:"csh/images/.svn/prop-base/manual_step-4_en.png.svn-base";s:4:"1131";s:55:"csh/images/.svn/prop-base/manual_step-5_en.png.svn-base";s:4:"1131";s:55:"csh/images/.svn/prop-base/manual_step-6_en.png.svn-base";s:4:"1131";s:62:"csh/images/.svn/prop-base/manual_step-7-8-9-10_en.png.svn-base";s:4:"1131";s:59:"csh/images/.svn/text-base/manual_step-1-2-3_en.png.svn-base";s:4:"3ea0";s:56:"csh/images/.svn/text-base/manual_step-11_en.png.svn-base";s:4:"62f5";s:56:"csh/images/.svn/text-base/manual_step-12_en.png.svn-base";s:4:"0d71";s:56:"csh/images/.svn/text-base/manual_step-13_en.png.svn-base";s:4:"f0d5";s:59:"csh/images/.svn/text-base/manual_step-14-15_en.png.svn-base";s:4:"67cb";s:56:"csh/images/.svn/text-base/manual_step-16_en.png.svn-base";s:4:"8068";s:56:"csh/images/.svn/text-base/manual_step-19_en.png.svn-base";s:4:"e1fd";s:55:"csh/images/.svn/text-base/manual_step-4_en.png.svn-base";s:4:"3a4e";s:55:"csh/images/.svn/text-base/manual_step-5_en.png.svn-base";s:4:"22d7";s:55:"csh/images/.svn/text-base/manual_step-6_en.png.svn-base";s:4:"7760";s:62:"csh/images/.svn/text-base/manual_step-7-8-9-10_en.png.svn-base";s:4:"d5f9";s:12:"doc/TODO.txt";s:4:"93c6";s:14:"doc/manual.sxw";s:4:"0487";s:20:"doc/.svn/all-wcprops";s:4:"3fe6";s:16:"doc/.svn/entries";s:4:"12a9";s:15:"doc/.svn/format";s:4:"c30f";s:36:"doc/.svn/prop-base/TODO.txt.svn-base";s:4:"685f";s:38:"doc/.svn/prop-base/manual.sxw.svn-base";s:4:"1131";s:36:"doc/.svn/text-base/TODO.txt.svn-base";s:4:"568b";s:38:"doc/.svn/text-base/manual.sxw.svn-base";s:4:"187a";s:19:"icons/icon_mod1.gif";s:4:"e008";s:30:"icons/icon_pbsurvey_item_1.gif";s:4:"7c6d";s:31:"icons/icon_pbsurvey_item_10.gif";s:4:"a672";s:34:"icons/icon_pbsurvey_item_10__h.gif";s:4:"6c57";s:31:"icons/icon_pbsurvey_item_11.gif";s:4:"345a";s:34:"icons/icon_pbsurvey_item_11__h.gif";s:4:"de98";s:31:"icons/icon_pbsurvey_item_12.gif";s:4:"4b03";s:34:"icons/icon_pbsurvey_item_12__h.gif";s:4:"83be";s:31:"icons/icon_pbsurvey_item_13.gif";s:4:"7fdb";s:34:"icons/icon_pbsurvey_item_13__h.gif";s:4:"d0d8";s:31:"icons/icon_pbsurvey_item_14.gif";s:4:"32ec";s:34:"icons/icon_pbsurvey_item_14__h.gif";s:4:"79ae";s:31:"icons/icon_pbsurvey_item_15.gif";s:4:"74c8";s:34:"icons/icon_pbsurvey_item_15__h.gif";s:4:"bdab";s:31:"icons/icon_pbsurvey_item_16.gif";s:4:"2e12";s:34:"icons/icon_pbsurvey_item_16__h.gif";s:4:"b07b";s:31:"icons/icon_pbsurvey_item_17.gif";s:4:"d50b";s:34:"icons/icon_pbsurvey_item_17__h.gif";s:4:"3a78";s:31:"icons/icon_pbsurvey_item_18.gif";s:4:"76dc";s:34:"icons/icon_pbsurvey_item_18__h.gif";s:4:"059f";s:31:"icons/icon_pbsurvey_item_19.gif";s:4:"4e22";s:34:"icons/icon_pbsurvey_item_19__h.gif";s:4:"16d2";s:33:"icons/icon_pbsurvey_item_1__h.gif";s:4:"025e";s:30:"icons/icon_pbsurvey_item_2.gif";s:4:"50e2";s:31:"icons/icon_pbsurvey_item_20.gif";s:4:"00a0";s:34:"icons/icon_pbsurvey_item_20__h.gif";s:4:"c9c4";s:31:"icons/icon_pbsurvey_item_21.gif";s:4:"f567";s:34:"icons/icon_pbsurvey_item_21__h.gif";s:4:"af11";s:31:"icons/icon_pbsurvey_item_22.gif";s:4:"9e8c";s:34:"icons/icon_pbsurvey_item_22__h.gif";s:4:"02f8";s:31:"icons/icon_pbsurvey_item_23.gif";s:4:"9ce5";s:34:"icons/icon_pbsurvey_item_23__h.gif";s:4:"44bc";s:33:"icons/icon_pbsurvey_item_2__h.gif";s:4:"284d";s:30:"icons/icon_pbsurvey_item_3.gif";s:4:"f92c";s:33:"icons/icon_pbsurvey_item_3__h.gif";s:4:"e3d3";s:30:"icons/icon_pbsurvey_item_4.gif";s:4:"8d28";s:33:"icons/icon_pbsurvey_item_4__h.gif";s:4:"d380";s:30:"icons/icon_pbsurvey_item_5.gif";s:4:"e78a";s:33:"icons/icon_pbsurvey_item_5__h.gif";s:4:"19a5";s:30:"icons/icon_pbsurvey_item_6.gif";s:4:"021e";s:33:"icons/icon_pbsurvey_item_6__h.gif";s:4:"463c";s:30:"icons/icon_pbsurvey_item_7.gif";s:4:"efc6";s:33:"icons/icon_pbsurvey_item_7__h.gif";s:4:"4ef9";s:30:"icons/icon_pbsurvey_item_8.gif";s:4:"3b38";s:33:"icons/icon_pbsurvey_item_8__h.gif";s:4:"ad0a";s:30:"icons/icon_pbsurvey_item_9.gif";s:4:"bc7d";s:33:"icons/icon_pbsurvey_item_9__h.gif";s:4:"09cb";s:31:"icons/icon_tx_pbsurvey_item.gif";s:4:"e008";s:34:"icons/icon_tx_pbsurvey_item__h.gif";s:4:"9c93";s:34:"icons/icon_tx_pbsurvey_results.gif";s:4:"6904";s:37:"icons/icon_tx_pbsurvey_results__h.gif";s:4:"0698";s:21:"icons/icon_wizard.gif";s:4:"ffe3";s:20:"icons/survey_wiz.gif";s:4:"ac20";s:22:"icons/.svn/all-wcprops";s:4:"0286";s:18:"icons/.svn/entries";s:4:"e06a";s:17:"icons/.svn/format";s:4:"c30f";s:43:"icons/.svn/prop-base/icon_mod1.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_1.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_10.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_10__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_11.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_11__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_12.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_12__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_13.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_13__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_14.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_14__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_15.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_15__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_16.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_16__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_17.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_17__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_18.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_18__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_19.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_19__h.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_1__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_2.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_20.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_20__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_21.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_21__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_22.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_22__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_pbsurvey_item_23.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_pbsurvey_item_23__h.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_2__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_3.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_3__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_4.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_4__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_5.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_5__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_6.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_6__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_7.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_7__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_8.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_8__h.gif.svn-base";s:4:"1131";s:54:"icons/.svn/prop-base/icon_pbsurvey_item_9.gif.svn-base";s:4:"1131";s:57:"icons/.svn/prop-base/icon_pbsurvey_item_9__h.gif.svn-base";s:4:"1131";s:55:"icons/.svn/prop-base/icon_tx_pbsurvey_item.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_tx_pbsurvey_item__h.gif.svn-base";s:4:"1131";s:58:"icons/.svn/prop-base/icon_tx_pbsurvey_results.gif.svn-base";s:4:"1131";s:61:"icons/.svn/prop-base/icon_tx_pbsurvey_results__h.gif.svn-base";s:4:"1131";s:45:"icons/.svn/prop-base/icon_wizard.gif.svn-base";s:4:"1131";s:44:"icons/.svn/prop-base/survey_wiz.gif.svn-base";s:4:"1131";s:43:"icons/.svn/text-base/icon_mod1.gif.svn-base";s:4:"e008";s:54:"icons/.svn/text-base/icon_pbsurvey_item_1.gif.svn-base";s:4:"7c6d";s:55:"icons/.svn/text-base/icon_pbsurvey_item_10.gif.svn-base";s:4:"a672";s:58:"icons/.svn/text-base/icon_pbsurvey_item_10__h.gif.svn-base";s:4:"6c57";s:55:"icons/.svn/text-base/icon_pbsurvey_item_11.gif.svn-base";s:4:"345a";s:58:"icons/.svn/text-base/icon_pbsurvey_item_11__h.gif.svn-base";s:4:"de98";s:55:"icons/.svn/text-base/icon_pbsurvey_item_12.gif.svn-base";s:4:"4b03";s:58:"icons/.svn/text-base/icon_pbsurvey_item_12__h.gif.svn-base";s:4:"83be";s:55:"icons/.svn/text-base/icon_pbsurvey_item_13.gif.svn-base";s:4:"7fdb";s:58:"icons/.svn/text-base/icon_pbsurvey_item_13__h.gif.svn-base";s:4:"d0d8";s:55:"icons/.svn/text-base/icon_pbsurvey_item_14.gif.svn-base";s:4:"32ec";s:58:"icons/.svn/text-base/icon_pbsurvey_item_14__h.gif.svn-base";s:4:"79ae";s:55:"icons/.svn/text-base/icon_pbsurvey_item_15.gif.svn-base";s:4:"74c8";s:58:"icons/.svn/text-base/icon_pbsurvey_item_15__h.gif.svn-base";s:4:"bdab";s:55:"icons/.svn/text-base/icon_pbsurvey_item_16.gif.svn-base";s:4:"2e12";s:58:"icons/.svn/text-base/icon_pbsurvey_item_16__h.gif.svn-base";s:4:"b07b";s:55:"icons/.svn/text-base/icon_pbsurvey_item_17.gif.svn-base";s:4:"d50b";s:58:"icons/.svn/text-base/icon_pbsurvey_item_17__h.gif.svn-base";s:4:"3a78";s:55:"icons/.svn/text-base/icon_pbsurvey_item_18.gif.svn-base";s:4:"76dc";s:58:"icons/.svn/text-base/icon_pbsurvey_item_18__h.gif.svn-base";s:4:"059f";s:55:"icons/.svn/text-base/icon_pbsurvey_item_19.gif.svn-base";s:4:"4e22";s:58:"icons/.svn/text-base/icon_pbsurvey_item_19__h.gif.svn-base";s:4:"16d2";s:57:"icons/.svn/text-base/icon_pbsurvey_item_1__h.gif.svn-base";s:4:"025e";s:54:"icons/.svn/text-base/icon_pbsurvey_item_2.gif.svn-base";s:4:"50e2";s:55:"icons/.svn/text-base/icon_pbsurvey_item_20.gif.svn-base";s:4:"00a0";s:58:"icons/.svn/text-base/icon_pbsurvey_item_20__h.gif.svn-base";s:4:"c9c4";s:55:"icons/.svn/text-base/icon_pbsurvey_item_21.gif.svn-base";s:4:"f567";s:58:"icons/.svn/text-base/icon_pbsurvey_item_21__h.gif.svn-base";s:4:"af11";s:55:"icons/.svn/text-base/icon_pbsurvey_item_22.gif.svn-base";s:4:"9e8c";s:58:"icons/.svn/text-base/icon_pbsurvey_item_22__h.gif.svn-base";s:4:"02f8";s:55:"icons/.svn/text-base/icon_pbsurvey_item_23.gif.svn-base";s:4:"9ce5";s:58:"icons/.svn/text-base/icon_pbsurvey_item_23__h.gif.svn-base";s:4:"44bc";s:57:"icons/.svn/text-base/icon_pbsurvey_item_2__h.gif.svn-base";s:4:"284d";s:54:"icons/.svn/text-base/icon_pbsurvey_item_3.gif.svn-base";s:4:"f92c";s:57:"icons/.svn/text-base/icon_pbsurvey_item_3__h.gif.svn-base";s:4:"e3d3";s:54:"icons/.svn/text-base/icon_pbsurvey_item_4.gif.svn-base";s:4:"8d28";s:57:"icons/.svn/text-base/icon_pbsurvey_item_4__h.gif.svn-base";s:4:"d380";s:54:"icons/.svn/text-base/icon_pbsurvey_item_5.gif.svn-base";s:4:"e78a";s:57:"icons/.svn/text-base/icon_pbsurvey_item_5__h.gif.svn-base";s:4:"19a5";s:54:"icons/.svn/text-base/icon_pbsurvey_item_6.gif.svn-base";s:4:"021e";s:57:"icons/.svn/text-base/icon_pbsurvey_item_6__h.gif.svn-base";s:4:"463c";s:54:"icons/.svn/text-base/icon_pbsurvey_item_7.gif.svn-base";s:4:"efc6";s:57:"icons/.svn/text-base/icon_pbsurvey_item_7__h.gif.svn-base";s:4:"4ef9";s:54:"icons/.svn/text-base/icon_pbsurvey_item_8.gif.svn-base";s:4:"3b38";s:57:"icons/.svn/text-base/icon_pbsurvey_item_8__h.gif.svn-base";s:4:"ad0a";s:54:"icons/.svn/text-base/icon_pbsurvey_item_9.gif.svn-base";s:4:"bc7d";s:57:"icons/.svn/text-base/icon_pbsurvey_item_9__h.gif.svn-base";s:4:"09cb";s:55:"icons/.svn/text-base/icon_tx_pbsurvey_item.gif.svn-base";s:4:"e008";s:58:"icons/.svn/text-base/icon_tx_pbsurvey_item__h.gif.svn-base";s:4:"9c93";s:58:"icons/.svn/text-base/icon_tx_pbsurvey_results.gif.svn-base";s:4:"6904";s:61:"icons/.svn/text-base/icon_tx_pbsurvey_results__h.gif.svn-base";s:4:"0698";s:45:"icons/.svn/text-base/icon_wizard.gif.svn-base";s:4:"ffe3";s:44:"icons/.svn/text-base/survey_wiz.gif.svn-base";s:4:"ac20";s:21:"lang/de.locallang.xml";s:4:"5cc3";s:24:"lang/de.locallang_db.xml";s:4:"12f4";s:26:"lang/de.locallang_mod1.xml";s:4:"a91e";s:25:"lang/de.locallang_wiz.xml";s:4:"d278";s:21:"lang/dk.locallang.xml";s:4:"e7ac";s:24:"lang/dk.locallang_db.xml";s:4:"c48f";s:26:"lang/dk.locallang_mod1.xml";s:4:"bfcf";s:25:"lang/dk.locallang_wiz.xml";s:4:"16a9";s:21:"lang/fr.locallang.xml";s:4:"9e27";s:24:"lang/fr.locallang_db.xml";s:4:"05fc";s:26:"lang/fr.locallang_mod1.xml";s:4:"59b4";s:25:"lang/fr.locallang_wiz.xml";s:4:"9071";s:18:"lang/locallang.xml";s:4:"5fde";s:21:"lang/locallang_db.xml";s:4:"b04d";s:23:"lang/locallang_mod1.xml";s:4:"9b09";s:27:"lang/locallang_modfunc1.xml";s:4:"1176";s:22:"lang/locallang_wiz.xml";s:4:"33f9";s:21:"lang/nl.locallang.xml";s:4:"de5a";s:24:"lang/nl.locallang_db.xml";s:4:"a073";s:26:"lang/nl.locallang_mod1.xml";s:4:"3c4b";s:30:"lang/nl.locallang_modfunc1.xml";s:4:"a6a1";s:25:"lang/nl.locallang_wiz.xml";s:4:"d098";s:21:"lang/no.locallang.xml";s:4:"a663";s:24:"lang/no.locallang_db.xml";s:4:"a64b";s:26:"lang/no.locallang_mod1.xml";s:4:"0f6f";s:25:"lang/no.locallang_wiz.xml";s:4:"8dc7";s:21:"lang/.svn/all-wcprops";s:4:"00c5";s:17:"lang/.svn/entries";s:4:"e517";s:16:"lang/.svn/format";s:4:"c30f";s:45:"lang/.svn/prop-base/de.locallang.xml.svn-base";s:4:"685f";s:48:"lang/.svn/prop-base/de.locallang_db.xml.svn-base";s:4:"685f";s:50:"lang/.svn/prop-base/de.locallang_mod1.xml.svn-base";s:4:"685f";s:49:"lang/.svn/prop-base/de.locallang_wiz.xml.svn-base";s:4:"685f";s:45:"lang/.svn/prop-base/dk.locallang.xml.svn-base";s:4:"685f";s:48:"lang/.svn/prop-base/dk.locallang_db.xml.svn-base";s:4:"685f";s:50:"lang/.svn/prop-base/dk.locallang_mod1.xml.svn-base";s:4:"685f";s:49:"lang/.svn/prop-base/dk.locallang_wiz.xml.svn-base";s:4:"685f";s:45:"lang/.svn/prop-base/fr.locallang.xml.svn-base";s:4:"685f";s:48:"lang/.svn/prop-base/fr.locallang_db.xml.svn-base";s:4:"685f";s:50:"lang/.svn/prop-base/fr.locallang_mod1.xml.svn-base";s:4:"685f";s:49:"lang/.svn/prop-base/fr.locallang_wiz.xml.svn-base";s:4:"685f";s:42:"lang/.svn/prop-base/locallang.xml.svn-base";s:4:"685f";s:45:"lang/.svn/prop-base/locallang_db.xml.svn-base";s:4:"685f";s:47:"lang/.svn/prop-base/locallang_mod1.xml.svn-base";s:4:"685f";s:51:"lang/.svn/prop-base/locallang_modfunc1.xml.svn-base";s:4:"685f";s:46:"lang/.svn/prop-base/locallang_wiz.xml.svn-base";s:4:"685f";s:45:"lang/.svn/prop-base/nl.locallang.xml.svn-base";s:4:"685f";s:48:"lang/.svn/prop-base/nl.locallang_db.xml.svn-base";s:4:"685f";s:50:"lang/.svn/prop-base/nl.locallang_mod1.xml.svn-base";s:4:"685f";s:54:"lang/.svn/prop-base/nl.locallang_modfunc1.xml.svn-base";s:4:"685f";s:49:"lang/.svn/prop-base/nl.locallang_wiz.xml.svn-base";s:4:"685f";s:45:"lang/.svn/prop-base/no.locallang.xml.svn-base";s:4:"685f";s:48:"lang/.svn/prop-base/no.locallang_db.xml.svn-base";s:4:"685f";s:50:"lang/.svn/prop-base/no.locallang_mod1.xml.svn-base";s:4:"685f";s:49:"lang/.svn/prop-base/no.locallang_wiz.xml.svn-base";s:4:"685f";s:45:"lang/.svn/text-base/de.locallang.xml.svn-base";s:4:"5cc3";s:48:"lang/.svn/text-base/de.locallang_db.xml.svn-base";s:4:"12f4";s:50:"lang/.svn/text-base/de.locallang_mod1.xml.svn-base";s:4:"a91e";s:49:"lang/.svn/text-base/de.locallang_wiz.xml.svn-base";s:4:"d278";s:45:"lang/.svn/text-base/dk.locallang.xml.svn-base";s:4:"e7ac";s:48:"lang/.svn/text-base/dk.locallang_db.xml.svn-base";s:4:"c48f";s:50:"lang/.svn/text-base/dk.locallang_mod1.xml.svn-base";s:4:"bfcf";s:49:"lang/.svn/text-base/dk.locallang_wiz.xml.svn-base";s:4:"16a9";s:45:"lang/.svn/text-base/fr.locallang.xml.svn-base";s:4:"9e27";s:48:"lang/.svn/text-base/fr.locallang_db.xml.svn-base";s:4:"05fc";s:50:"lang/.svn/text-base/fr.locallang_mod1.xml.svn-base";s:4:"59b4";s:49:"lang/.svn/text-base/fr.locallang_wiz.xml.svn-base";s:4:"9071";s:42:"lang/.svn/text-base/locallang.xml.svn-base";s:4:"3deb";s:45:"lang/.svn/text-base/locallang_db.xml.svn-base";s:4:"8476";s:47:"lang/.svn/text-base/locallang_mod1.xml.svn-base";s:4:"9b09";s:51:"lang/.svn/text-base/locallang_modfunc1.xml.svn-base";s:4:"1176";s:46:"lang/.svn/text-base/locallang_wiz.xml.svn-base";s:4:"33f9";s:45:"lang/.svn/text-base/nl.locallang.xml.svn-base";s:4:"de5a";s:48:"lang/.svn/text-base/nl.locallang_db.xml.svn-base";s:4:"a073";s:50:"lang/.svn/text-base/nl.locallang_mod1.xml.svn-base";s:4:"3c4b";s:54:"lang/.svn/text-base/nl.locallang_modfunc1.xml.svn-base";s:4:"a6a1";s:49:"lang/.svn/text-base/nl.locallang_wiz.xml.svn-base";s:4:"d098";s:45:"lang/.svn/text-base/no.locallang.xml.svn-base";s:4:"a663";s:48:"lang/.svn/text-base/no.locallang_db.xml.svn-base";s:4:"a64b";s:50:"lang/.svn/text-base/no.locallang_mod1.xml.svn-base";s:4:"0f6f";s:49:"lang/.svn/text-base/no.locallang_wiz.xml.svn-base";s:4:"8dc7";s:13:"mod1/conf.php";s:4:"cf06";s:14:"mod1/index.php";s:4:"27d5";s:21:"mod1/.svn/all-wcprops";s:4:"95e7";s:17:"mod1/.svn/entries";s:4:"cadd";s:16:"mod1/.svn/format";s:4:"c30f";s:37:"mod1/.svn/prop-base/conf.php.svn-base";s:4:"685f";s:38:"mod1/.svn/prop-base/index.php.svn-base";s:4:"685f";s:37:"mod1/.svn/text-base/conf.php.svn-base";s:4:"5a4a";s:38:"mod1/.svn/text-base/index.php.svn-base";s:4:"503c";s:39:"modfunc1/class.tx_pbsurvey_modfunc1.php";s:4:"42f0";s:25:"modfunc1/.svn/all-wcprops";s:4:"4a84";s:21:"modfunc1/.svn/entries";s:4:"cff8";s:20:"modfunc1/.svn/format";s:4:"c30f";s:63:"modfunc1/.svn/prop-base/class.tx_pbsurvey_modfunc1.php.svn-base";s:4:"685f";s:63:"modfunc1/.svn/text-base/class.tx_pbsurvey_modfunc1.php.svn-base";s:4:"fdff";s:29:"pi1/class.tx_pbsurvey_pi1.php";s:4:"9ccd";s:37:"pi1/class.tx_pbsurvey_pi1_wizicon.php";s:4:"bb39";s:20:"pi1/de.locallang.xml";s:4:"517d";s:20:"pi1/dk.locallang.xml";s:4:"4c14";s:20:"pi1/fi.locallang.xml";s:4:"c313";s:20:"pi1/fr.locallang.xml";s:4:"74f0";s:20:"pi1/it.locallang.xml";s:4:"5967";s:17:"pi1/locallang.xml";s:4:"72fa";s:20:"pi1/nl.locallang.xml";s:4:"798c";s:20:"pi1/no.locallang.xml";s:4:"1b01";s:17:"pi1/template.html";s:4:"0517";s:20:"pi1/.svn/all-wcprops";s:4:"142b";s:16:"pi1/.svn/entries";s:4:"294b";s:15:"pi1/.svn/format";s:4:"c30f";s:53:"pi1/.svn/prop-base/class.tx_pbsurvey_pi1.php.svn-base";s:4:"685f";s:61:"pi1/.svn/prop-base/class.tx_pbsurvey_pi1_wizicon.php.svn-base";s:4:"685f";s:44:"pi1/.svn/prop-base/de.locallang.xml.svn-base";s:4:"685f";s:44:"pi1/.svn/prop-base/dk.locallang.xml.svn-base";s:4:"685f";s:44:"pi1/.svn/prop-base/fi.locallang.xml.svn-base";s:4:"685f";s:44:"pi1/.svn/prop-base/fr.locallang.xml.svn-base";s:4:"685f";s:41:"pi1/.svn/prop-base/locallang.xml.svn-base";s:4:"685f";s:44:"pi1/.svn/prop-base/nl.locallang.xml.svn-base";s:4:"685f";s:44:"pi1/.svn/prop-base/no.locallang.xml.svn-base";s:4:"685f";s:41:"pi1/.svn/prop-base/template.html.svn-base";s:4:"685f";s:53:"pi1/.svn/text-base/class.tx_pbsurvey_pi1.php.svn-base";s:4:"223a";s:61:"pi1/.svn/text-base/class.tx_pbsurvey_pi1_wizicon.php.svn-base";s:4:"1918";s:44:"pi1/.svn/text-base/de.locallang.xml.svn-base";s:4:"517d";s:44:"pi1/.svn/text-base/dk.locallang.xml.svn-base";s:4:"4c14";s:44:"pi1/.svn/text-base/fi.locallang.xml.svn-base";s:4:"c313";s:44:"pi1/.svn/text-base/fr.locallang.xml.svn-base";s:4:"74f0";s:44:"pi1/.svn/text-base/it.locallang.xml.svn-base";s:4:"5967";s:41:"pi1/.svn/text-base/locallang.xml.svn-base";s:4:"60ef";s:44:"pi1/.svn/text-base/nl.locallang.xml.svn-base";s:4:"798c";s:44:"pi1/.svn/text-base/no.locallang.xml.svn-base";s:4:"1b01";s:41:"pi1/.svn/text-base/template.html.svn-base";s:4:"1fe2";s:23:"static/.svn/all-wcprops";s:4:"1044";s:19:"static/.svn/entries";s:4:"45e5";s:18:"static/.svn/format";s:4:"c30f";s:20:"static/css/setup.txt";s:4:"9ace";s:27:"static/css/.svn/all-wcprops";s:4:"d758";s:23:"static/css/.svn/entries";s:4:"268e";s:22:"static/css/.svn/format";s:4:"c30f";s:44:"static/css/.svn/prop-base/setup.txt.svn-base";s:4:"685f";s:44:"static/css/.svn/text-base/setup.txt.svn-base";s:4:"fb06";s:15:"wizard/conf.php";s:4:"e95c";s:15:"wizard/init.php";s:4:"6e5d";s:25:"wizard/wizard_answers.php";s:4:"6652";s:23:"wizard/.svn/all-wcprops";s:4:"2c80";s:19:"wizard/.svn/entries";s:4:"a6cf";s:18:"wizard/.svn/format";s:4:"c30f";s:39:"wizard/.svn/prop-base/conf.php.svn-base";s:4:"685f";s:39:"wizard/.svn/prop-base/init.php.svn-base";s:4:"685f";s:49:"wizard/.svn/prop-base/wizard_answers.php.svn-base";s:4:"685f";s:39:"wizard/.svn/text-base/conf.php.svn-base";s:4:"73d4";s:39:"wizard/.svn/text-base/init.php.svn-base";s:4:"eac2";s:49:"wizard/.svn/text-base/wizard_answers.php.svn-base";s:4:"22cd";s:16:"wizard2/conf.php";s:4:"e35a";s:16:"wizard2/init.php";s:4:"6e5d";s:29:"wizard2/wizard_conditions.php";s:4:"6917";s:24:"wizard2/.svn/all-wcprops";s:4:"a72f";s:20:"wizard2/.svn/entries";s:4:"42ce";s:19:"wizard2/.svn/format";s:4:"c30f";s:40:"wizard2/.svn/prop-base/conf.php.svn-base";s:4:"685f";s:40:"wizard2/.svn/prop-base/init.php.svn-base";s:4:"685f";s:53:"wizard2/.svn/prop-base/wizard_conditions.php.svn-base";s:4:"685f";s:40:"wizard2/.svn/text-base/conf.php.svn-base";s:4:"1647";s:40:"wizard2/.svn/text-base/init.php.svn-base";s:4:"eac2";s:53:"wizard2/.svn/text-base/wizard_conditions.php.svn-base";s:4:"89ab";}',
	'suggests' => array(
	),
);

?>