<?php
/**
 * CORE Conference Manager
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://www.terena.org/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to webmaster@terena.org so we can send you a copy immediately.
 *
 * @copyright  Copyright (c) 2011 TERENA (http://www.terena.org)
 * @license    http://www.terena.org/license/new-bsd     New BSD License
 * @revision   $Id: Item.php 598 2011-09-15 20:55:32Z visser $
 */
/**
	* This class represents a single record
	* Methods in this class could include logic for a single record
	* for example sticking first_name and last_name together in a getName() method
	*
	*/
class Core_Resource_Event_Item extends TA_Model_Resource_Db_Table_Row_Abstract
{
	// returns concatenated start/end time, eg: "09:00-11:00"
	public function getCompleteTime()
	{
		return $this->_isoToNormalDate($this->tstart, 'HH:mm') . '-' . $this->_isoToNormalDate($this->tend, 'HH:mm');
	}
	
	// returns concatenated start/end datetime, eg: "10/11/2010 09:00-11:00"
	public function getCompleteDateTime()
	{
		return $this->_isoToNormalDate($this->tstart, 'dd/MM/yyyy HH:mm') . '-' . $this->_isoToNormalDate($this->tend, 'HH:mm');
	}	
}