<?php
/**
 * OOP config CakePHP module find params test
 *
 * @author Ustimenko Alexander <a@ustimen.co>
 * @copyright 2013 Ustimenko Alexander <a@ustimen.co>
 */
class FindParamsTest extends PHPUnit_Framework_TestCase {

	public function testCanBeInstantiated() {
		new OopConfig_CakePHP_FindParams();
	}

	public function testSetArrayValues() {
		$expected = array(
			'conditions' => array('Model.field' => 123),
			'fields'     => array('Model.field1', 'DISTINCT Model.field2'),
			'order'      => array('Model.created', 'Model.field3 DESC'),
			'group'      => array('Model.field'),
		);

		$findParams = new OopConfig_CakePHP_FindParams();
		$actual     = $findParams
			->conditions->fieldIs('Model.field', 123)->up()
			->fields->add('Model.field1')->add('DISTINCT Model.field2')->up()
			->order->add('Model.created')->add('Model.field3 DESC')->up()
			->group->add('Model.field')->up()
			->get()
		;

		$this->assertEquals($expected, $actual);
	}
}