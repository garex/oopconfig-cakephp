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
	 * A list of fields to be retrieved when data is fetched. Returns all fields by default.
	 * @var OopConfig_CakePHP_FindParams_Fields
	 */
	public $fields;

	/**
	 * An SQL fragment that defines the sorting order for the returned rows.
	 * @var OopConfig_CakePHP_FindParams_Order
	 */
	public $order;

	/**
	 * An SQL fragment that defines the grouping for the returned rows.
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

	/**
	 * A list of fields to be retrieved when data is fetched. Returns all fields by default.
	 * @param string $field
	 * @param string $field,... OPTIONAL fields
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function fields($field) {
		foreach (func_get_args() as $field) {
			$this->fields->add($field);
		}
		return $this;
	}

	/**
	 * An SQL fragment that defines the sorting order for the returned rows.
	 * @param string $field
	 * @param string $field,... OPTIONAL fields
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function order($field) {
		foreach (func_get_args() as $field) {
			$this->order->add($field);
		}
		return $this;
	}

	/**
	 * An SQL fragment that defines the grouping for the returned rows.
	 * @param string $field
	 * @param string $field,... OPTIONAL fields
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function group($field) {
		foreach (func_get_args() as $field) {
			$this->group->add($field);
		}
		return $this;
	}

}