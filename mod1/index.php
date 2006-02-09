<?php
/***************************************************************
*  Copyright notice
*  
*  (c) 2005 Patrick Broens (patrick@patrickbroens.nl)
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is 
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
* 
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

unset($MCONF);	
require ("conf.php");
require ($BACK_PATH."init.php");
require ($BACK_PATH."template.php");
$LANG->includeLLFile('EXT:pbsurvey/lang/locallang_mod1.xml');
require_once (PATH_t3lib.'class.t3lib_scbase.php');
$BE_USER->modAccess($MCONF,1);
//require_once(t3lib_extMgm::extPath('cc_debug').'class.tx_ccdebug.php');

class tx_pbsurvey_module1 extends t3lib_SCbase {
	var $strExtKey;
	var $strItemsTable;
	var $arrSurveyItems = array();
	
	/**
	 * Initialization of the class
	 *
	 * @return	void
	 */
	function init()	{
		global $BACK_PATH;
		parent::init();
		$this->strExtKey = 'tx_pbsurvey';
		$this->arrModParameters = t3lib_div::_GP($this->strExtKey);
		$this->strResultsTable = $this->strExtKey . '_results';
		$this->strItemsTable = $this->strExtKey . '_item';
		$this->readSurvey();
	}
	
	/**
	 * Main function of the module. Write the content to $this->content
	 *
	 * @return   void
	 */
	function main()	{
		global $BE_USER,$LANG,$BACK_PATH;
		$arrPageInfo = t3lib_BEfunc::readPageAccess($this->id,$this->perms_clause);
		$intAccess = is_array($arrPageInfo) ? 1 : 0;
		if (($this->id && $intAccess) || ($BE_USER->user["admin"] && !$this->id))	{
			$this->objDoc = t3lib_div::makeInstance("mediumDoc");
			$this->objDoc->backPath = $BACK_PATH;
			$this->objDoc->form='<form action="" method="POST">';
			$this->objDoc->JScode = '
				<script language="javascript" type="text/javascript">
					script_ended = 0;
					function jumpToUrl(URL)	{
						document.location = URL;
					}
				</script>
			';
			$this->objDoc->postCode='
				<script language="javascript" type="text/javascript">
					script_ended = 1;
					if (top.fsMod) top.fsMod.recentIds["web"] = '.intval($this->id).';
				</script>
			';
			$strHeaderSection = $this->objDoc->getHeader("pages",$arrPageInfo,$arrPageInfo["_thePath"])."<br>".$LANG->sL("LLL:EXT:lang/locallang_core.php:labels.path").": ".t3lib_div::fixed_lgd_pre($arrPageInfo["_thePath"],50);
			$this->content.=$this->objDoc->startPage($LANG->getLL("title"));
			$this->content.=$this->objDoc->header($LANG->getLL("title"));
			$this->content.=$this->objDoc->spacer(5);
			$this->content.=$this->objDoc->section("",$this->objDoc->funcMenu($strHeaderSection,t3lib_BEfunc::getFuncMenu($this->id,"SET[function]",$this->MOD_SETTINGS["function"],$this->MOD_MENU["function"])));
			$this->content.=$this->objDoc->divider(5);
			if ($this->arrSurveyItems) {
				$this->extObjContent();
			} else {
				$this->content.=$this->sectionError();
			}
			if ($BE_USER->mayMakeShortcut())	{
				$this->content.=$this->objDoc->spacer(20).$this->objDoc->section("",$this->objDoc->makeShortcutIcon("id",implode(",",array_keys($this->MOD_MENU)),$this->MCONF["name"]));
			}
			$this->content.=$this->objDoc->spacer(10);
		} else {
			$this->objDoc = t3lib_div::makeInstance("mediumDoc");
			$this->objDoc->backPath = $BACK_PATH;
			$this->content.=$this->objDoc->startPage($LANG->getLL("title"));
			$this->content.=$this->objDoc->header($LANG->getLL("title"));
			$this->content.=$this->objDoc->spacer(5);
			$this->content.=$this->objDoc->spacer(10);
		}
	}

	/**
	 * Prints out the module HTML
	 * 
	 * @return   void
	 */
	function printContent()	{
		$this->content.=$this->objDoc->endPage();
		echo $this->content;
	}
	
	/**
	 * Build section to show error text if no questions are available on page
	 *
	 * @return	string	HTML containing the section
	 */
	function sectionError() {
		global $LANG;
		$strTemp = '<p>'.$LANG->getLL('no_results').'</p>'; 
		$strOutput = $this->objDoc->section($LANG->getLL('error'),$strTemp,0,1);
		return $strOutput;
	}
	
	/**
	 * Read all questions in the selected page
	 * Write content to $this->arrSurveyItems[]
	 *
	 * @return	void
	 */
	function readSurvey() {
		$arrSelectConf['selectFields'] = 'uid,question_type,question,question_alias,answers,rows,answers_allow_additional';
    	$arrSelectConf['where'] = '1=1';
    	$arrSelectConf['where'] .= ' AND pid=' . intval($this->id);
		$arrSelectConf['where'] .= ' AND ' . $this->strItemsTable . '.sys_language_uid IN (0,-1)';
		$arrSelectConf['where'] .= ' AND question_type>=1 AND question_type<=16';
		$arrSelectConf['where'] .= t3lib_BEfunc::BEenableFields($this->strItemsTable);
		$arrSelectConf['where'] .= t3lib_BEfunc::deleteClause($this->strItemsTable);
		$arrSelectConf['orderBy'] = 'sorting ASC';
		$dbRes = $GLOBALS['TYPO3_DB']->exec_SELECTquery($arrSelectConf['selectFields'],$this->strItemsTable,$arrSelectConf['where'],'',$arrSelectConf['orderBy'],'');
		while ($arrRow =$GLOBALS['TYPO3_DB']->sql_fetch_assoc($dbRes)){
            array_walk($arrRow, 'trim');
            $arrRow['answers'] = $this->answersArray($arrRow['answers']);
            $this->arrSurveyItems[$arrRow['uid']] = $arrRow;
		}	
    }
    
    /**
	 * Count the results
	 *
	 * @return	integer		total number of results on this page
	 */
	function countResults() {
		$arrSelectConf['selectFields'] = '*';
		$arrSelectConf['where'] = '1=1';
    	$arrSelectConf['where'] .= ' AND pid=' . intval($this->id);
		$arrSelectConf['where'] .= t3lib_BEfunc::BEenableFields($this->strResultsTable);
		$arrSelectConf['where'] .= t3lib_BEfunc::deleteClause($this->strResultsTable);
		$dbRes=$GLOBALS['TYPO3_DB']->exec_SELECTquery($arrSelectConf['selectFields'],$this->strResultsTable,$arrSelectConf['where']);
		$arrOutput['all'] = $GLOBALS['TYPO3_DB']->sql_num_rows($dbRes);
		$arrSelectConf['where'] .= ' AND finished=1';
		$dbRes=$GLOBALS['TYPO3_DB']->exec_SELECTquery($arrSelectConf['selectFields'],$this->strResultsTable,$arrSelectConf['where']);
		$arrOutput['finished'] = $GLOBALS['TYPO3_DB']->sql_num_rows($dbRes);
		$arrOutput['unfinished'] = $arrOutput['all'] - $arrOutput['finished'];
		return $arrOutput;
	}
	
	/**
	 * Create array out of possible answers in backend answers field
	 *
	 * @param	string		Content of backend answers field
	 * @return	array		Converted answers information to array
	 */
	function answersArray($strInput) {
		$arrKeys = array('answer','points');
		$strLine=explode(chr(10),$strInput);
		foreach($strLine as $intKey => $strLineValue)	{
			$strValue = explode('|',$strLineValue);
			for ($intCounter=0;$intCounter<2;$intCounter++)	{
				$arrOutput[$intKey+1][$arrKeys[$intCounter]]=trim($strValue[$intCounter]);
			}
		}
		return $arrOutput;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurvey/mod1/index.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurvey/mod1/index.php']);
}

$SOBE = t3lib_div::makeInstance('tx_pbsurvey_module1');
$SOBE->init();
foreach($SOBE->include_once as $INC_FILE)	include_once($INC_FILE);
$SOBE->checkExtObj();
foreach($SOBE->include_once as $INC_FILE)	include_once($INC_FILE);
$SOBE->checkSubExtObj();
$SOBE->main();
$SOBE->printContent();
?>