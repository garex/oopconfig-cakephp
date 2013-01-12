<?php
/**
 * @see OopConfig_CakePHP_FindParams
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_CakePHP_FindParams_Order extends OopConfig_Modules_Abstract_Part {

	/**
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function up() {
		return $this->up;
	}

	/**
	 * Order result by fields. Can take more than one argument
	 * @param string $field
	 * @return OopConfig_CakePHP_FindParams_Order
	 */
	public function add() {
		foreach (func_get_args() as $value) {
			$this->_add($value);
		}
		return $this;
	}
}