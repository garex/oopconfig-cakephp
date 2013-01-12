<?php
/**
 * @see OopConfig_CakePHP_FindParams
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_CakePHP_FindParams_Fields extends OopConfig_Modules_Abstract_Part {

	/**
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function up() {
		return $this->up;
	}

	/**
	 * Add field
	 * @param string $field
	 * @return OopConfig_CakePHP_FindParams_Fields
	 */
	public function add($field) {
		return $this->_add($field);
	}

}