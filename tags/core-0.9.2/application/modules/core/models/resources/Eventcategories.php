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
class Core_Resource_Eventcategories extends TA_Model_Resource_Db_Table_Abstract
{

	protected $_name = 'eventcategories';

	protected $_primary = 'eventcategory_id';

	public function init() {}

	/**
	 * Get event categories
	 *
	 * @return	array
	 */
	public function getCategories($empty = null)
	{
		$return = array();

		$return = $this->getAdapter()->fetchPairs($this->select()
			->from($this->info('name'), array('eventcategory_id', 'category'))
			->order('category ASC')
		);

		if ($empty) {
			$return[0] = $empty;
			asort($return);
		}

		return $return;
	}
}