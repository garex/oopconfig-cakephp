<?php
/**
 * @see OopConfig_CakePHP_FindParams
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class OopConfig_CakePHP_FindParams_Conditions extends OopConfig_CakePHP_FindParams_AbstractPart {

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

	/**
	 * Checks if field value is like pattern
	 * @param string $field
	 * @param string $pattern
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function like($field, $pattern) {
		return $this->_setAssoc($field . ' LIKE', $pattern);
	}

	/**
	 * Checks if field value is not like pattern
	 * @param string $field
	 * @param string $pattern
	 * @return OopConfig_CakePHP_FindParams_Conditions
	 */
	public function notLike($field, $pattern) {
		return $this->_setAssoc($field . ' NOT LIKE', $pattern);
	}

}