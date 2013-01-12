<?php
/**
 * @see OopConfig_CakePHP_FindParams
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_CakePHP_FindParams_Columns extends OopConfig_CakePHP_FindParams_AbstractPart {

	/**
	 * Add field into parameters
	 * @param string $field
	 * @return OopConfig_CakePHP_FindParams_Columns
	 */
	public function add($field) {
		return $this->_add($field);
	}
}