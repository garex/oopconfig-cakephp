<?php
/**
 * @see OopConfig_CakePHP_FindParams
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 * @property up OopConfig_CakePHP_FindParams
 */
class OopConfig_CakePHP_FindParams_Conditions extends OopConfig_Modules_Abstract_Part {

	/**
	 * @return OopConfig_CakePHP_FindParams
	 */
	public function up() {
		return $this->up;
	}

	/**
	 * Checks if field has provided value
	 * @param string $field
	 * @param mixed $value
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function fieldIs($field, $value) {
		return $this->_setAssoc($field, $value);
	}

}