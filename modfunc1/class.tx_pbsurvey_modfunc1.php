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

$LANG->includeLLFile('EXT:pbsurvey/lang/locallang_modfunc1.xml');

$BE_USER->modAccess($MCONF,1);

/**
 * Backend Module Function 'Overview' for the 'pbsurvey' extension.
 *
 * @author Patrick Broens <patrick@patrickbroens.nl>
 * @package TYPO3
 * @subpackage pbsurvey
 */
class tx_pbsurvey_modfunc1 extends t3lib_extobjbase {

    /**********************************
	 *
	 * Configuration functions
	 *
	 **********************************/
	 	
	/**
	 * Initialization of the class
	 *
	 * @param	object		Parent Object
	 * @param	array		Configuration array for the extension
	 * @return	void
	 */
	function init(&$pObj,$conf)	{
		global $BACK_PATH;
		parent::init($pObj,$conf);
		$this->handleExternalFunctionValue();
		$this->arrPageInfo = t3lib_BEfunc::readPageAccess($this->pObj->id,$this->perms_clause);
		list($strRequestUri) = explode('#',t3lib_div::getIndpEnv('REQUEST_URI'));
	}

    /**********************************
	 *
	 * General functions
	 *
	 **********************************/
	
	/**
	 * Main function of the module. Check access of user and call function to build content
	 *
	 * @return   string	HTML of this function
	 */
	function main()	{
		global $BE_USER;
		if (($this->pObj->id && is_array($this->arrPageInfo)) || ($BE_USER->user['admin'] && !$this->pObj->id))	{
			$strOutput .= $this->moduleContent();
		}
		return $strOutput;
	}
	
	/**
	 * Generates the module content
	 *
	 * @return   string      HTML Content of this function
	 */
	function moduleContent() {
		$strOutput .= $this->sectionResults();
		$strOutput .= $this->sectionQuestions();			
		return $strOutput;
	}	

	/**********************************
	 *
	 * Rendering functions
	 *
	 **********************************/
	
	/**
	 * Build section to show some simple statistics like number of results
	 *
	 * @return	string	HTML containing the section
	 */
	function sectionResults() {
		global $LANG;
		$arrResults = $this->pObj->countResults();
		$arrTemp[] = '<table>';
		$arrTemp[] = '<tr>';
		$arrTemp[] = '<td>'.$LANG->getLL('number_results_finished').':</td>';	
		$arrTemp[] = '<td>'.$arrResults['finished'].'</td>';		
		$arrTemp[] = '</tr>';
		$arrTemp[] = '<tr>';
		$arrTemp[] = '<td>'.$LANG->getLL('number_results_unfinished').':</td>';	
		$arrTemp[] = '<td>'.$arrResults['unfinished'].'</td>';		
		$arrTemp[] = '</tr>';
		$arrTemp[] = '</tr>';
		$arrTemp[] = '<tr>';
		$arrTemp[] = '<td><strong>'.$LANG->getLL('number_results_all').':</strong></td>';	
		$arrTemp[] = '<td><strong>'.$arrResults['all'].'</strong></td>';		
		$arrTemp[] = '</tr>';
		$arrTemp[] = '</table>';
		$strOutput .= $this->pObj->objDoc->section($LANG->getLL('title'),t3lib_BEfunc::cshItem('_MOD_'.$GLOBALS['MCONF']['name'],'pbsurveyModfunc1',$GLOBALS['BACK_PATH'],'|<br/>').implode(chr(13),$arrTemp),0,1);
		$strOutput .= $this->pObj->objDoc->divider(10);
		return $strOutput;
	}
	
	/**
	 * Build section to show list of questions on page
	 *
	 * @return	string	HTML containing the section
	 */
	function sectionQuestions() {
		global $LANG;
		foreach ($this->pObj->arrSurveyItems as $arrItem) {
			$arrTemp[] = '<li>'.$arrItem['question'].'</li>';
		}
		$strOutput .= $this->pObj->objDoc->section($LANG->getLL('list_questions'),'<ul>'.implode(chr(13),$arrTemp).'</ul>',0,0);
		$strOutput .= '<p><strong>'.$LANG->getLL('number_questions').': '.count($this->pObj->arrSurveyItems).'</strong></p>';
		return $strOutput;
	}
}

if (defined('TYPO3_MODE') && $TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurvey/modfunc1/class.tx_pbsurvey_modfunc1.php'])	{
	include_once($TYPO3_CONF_VARS[TYPO3_MODE]['XCLASS']['ext/pbsurvey/modfunc1/class.tx_pbsurvey_modfunc1.php']);
}
?>