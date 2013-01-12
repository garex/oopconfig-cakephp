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
	public function is($field, $value) {
		return $this->_setAssoc($field, $value);
	}

	/**
	 * Checks if field does not has provided value
	 * @param string $field
	 * @param mixed $value
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function not($field, $value) {
		return $this->_setAssoc($field . ' !=', $value);
	}

	/**
	 * Checks if field has value more than provided
	 * @param string $field
	 * @param mixed $value
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function more($field, $value) {
		return $this->_setAssoc($field . ' >', $value);
	}

	/**
	 * Checks if field has value less than provided
	 * @param string $field
	 * @param mixed $value
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function less($field, $value) {
		return $this->_setAssoc($field . ' <', $value);
	}

	/**
	 * Checks if field has value between provided range
	 * @param string $field
	 * @param mixed $start
	 * @param mixed $finish
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function between($field, $start, $finish) {
		return $this->_setAssoc($field . ' BETWEEN ? AND ?', array($start, $finish));
	}

	/**
	 * Adds raw condition
	 * @param string $value
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function raw($value) {
		return $this->_add($value);
	}

}