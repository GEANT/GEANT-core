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
 * @revision   $Id$
 */

/** 
 *
 * @package Core_Resource
 * @author Christian Gijtenbeek <gijtenbeek@terena.org>
 */
class Core_Resource_UsersRoles extends TA_Model_Resource_Db_Table_Abstract
{

	protected $_name = 'user_role';

	protected $_primary = 'user_role_id';

	// many to many mapping
	protected $_referenceMap = array(
		'User' => array(
			'columns' => array('user_id'),
			'refTableClass' => 'Core_Resource_Users',
			'refColumns' => array('user_id')
		),
		'Role' => array(
			'columns' => array('role_id'),
			'refTableClass' => 'Core_Resource_Roles',
			'refColumns' => array('role_id')
		)
	);	


}