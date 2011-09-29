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
 * @revision   $Id: Useraudit.php 598 2011-09-15 20:55:32Z visser $
 */
class Core_Resource_Useraudit extends TA_Model_Resource_Db_Table_Abstract
{

	protected $_name = 'useraudit';

	protected $_primary = 'useraudit_id';

	public function init() {}

	/**
	 * Gets user by primary key
	 * @return object Core_Resource_User_Item
	 */
	public function getUserById($id)
	{
		return $this->find( (int)$id )->current();
	}

}