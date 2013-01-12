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

}