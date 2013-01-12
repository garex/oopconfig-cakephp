<?php
/**
 * CakePHP find params: conditions, recursive, fields, order, group, limit, page, offset, callbacks
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_CakePHP_FindParams extends OopConfig_Modules_Abstract {

	/**
	 * Conditions that will be applied to resultset: where part of the query.
	 * @var OopConfig_CakePHP_FindParams_Conditions
	 */
	public $conditions;

	/**
	 * Fields that will be returned in resultset: select part of the query.
	 * @var OopConfig_CakePHP_FindParams_Fields
	 */
	public $fields;

	/**
	 * Order columns by which resultset will be ordered: order by part of the query.
	 * @var OopConfig_CakePHP_FindParams_Order
	 */
	public $order;

	/**
	 * Grouping columns by which resultset will be grouped: group by part of the query.
	 * @var OopConfig_CakePHP_FindParams_Group
	 */
	public $group;

	public function __construct() {
		$this->conditions = new OopConfig_CakePHP_FindParams_Conditions($this);
		$this->fields     = new OopConfig_CakePHP_FindParams_Fields($this);
		$this->order      = new OopConfig_CakePHP_FindParams_Order($this);
		$this->group      = new OopConfig_CakePHP_FindParams_Group($this);
	}

	/**
	 * Number of associations to recurse through during find calls. Fetches only the first level by default.
	 * @param integer $value
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function recursive($value) {
		return $this->_setAssoc(__FUNCTION__, $value);
	}

	/**
	 * The maximum number of rows you want returned.
	 * @param integer $value
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function limit($value) {
		return $this->_setAssoc(__FUNCTION__, $value);
	}

	/**
	 * Which page of results to fetch. Used in pair with "limit".
	 * @see OopConfig_CakePHP_FindParams::limit
	 * @param integer $value
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function page($value) {
		return $this->_setAssoc(__FUNCTION__, $value);
	}

	/**
	 * The number of rows to skip over (given the current conditions and order) before fetching.
	 * @param integer $value
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function offset($value) {
		return $this->_setAssoc(__FUNCTION__, $value);
	}

	/**
	 * Run callbacks (fire events)?
	 * @param boolean $value
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function callbacks($value) {
		return $this->_setAssoc(__FUNCTION__, $value);
	}

}