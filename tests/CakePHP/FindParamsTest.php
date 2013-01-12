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
			->conditions->is('Model.field', 123)->up()
			->fields->add('Model.field1')->add('DISTINCT Model.field2')->up()
			->order->add('Model.created')->add('Model.field3 DESC')->up()
			->group->add('Model.field')->up()
			->get()
		;

		$this->assertEquals($expected, $actual);
	}

	public function testSetFlatValueLikeResursive() {
		$expected = array(
			'recursive'  => 1,
		);

		$findParams = new OopConfig_CakePHP_FindParams();
		$actual     = $findParams
			->recursive(1)
			->get()
		;

		$this->assertEquals($expected, $actual);
	}

	public function testSetFlatValueLikeLimitPageOffsetAndCallbacks() {
		$expected = array(
			'limit'      => 100,
			'page'       => 1,
			'offset'     => 10,
			'callbacks'  => true,
		);

		$findParams = new OopConfig_CakePHP_FindParams();
		$actual     = $findParams
			->limit(100)
			->page(1)
			->offset(10)
			->callbacks(true)
			->get()
		;

		$this->assertEquals($expected, $actual);
	}

	public function testWriteLessCodeForArrayValues() {
		$expected = array(
			'fields'     => array('Model.field1', 'DISTINCT Model.field2'),
			'order'      => array('Model.created', 'Model.field3 DESC'),
			'group'      => array('Model.field'),
		);

		$findParams = new OopConfig_CakePHP_FindParams();
		$actual     = $findParams
		->fields('Model.field1', 'DISTINCT Model.field2')
		->order('Model.created', 'Model.field3 DESC')
		->group('Model.field')
		->get()
		;

		$this->assertEquals($expected, $actual);
	}

	public function testShortcutForConditions() {
		$expected = array(
			'conditions' => array(
				'Model.field1'    => 1,
				'Model.field2 !=' => 2,
				'Model.field3 >'  => 3,
				'Model.field4 <'  => 4,
				'Model.field5 BETWEEN ? AND ?' => array(5, 5),
				'Model.field6 & 6 = 6',
			),
		);

		$findParams = new OopConfig_CakePHP_FindParams();
		$actual     = $findParams
			->condition('Model.field1', 1)
			->conditionNot('Model.field2', 2)
			->conditionMore('Model.field3', 3)
			->conditionLess('Model.field4', 4)
			->conditionBetween('Model.field5', 5, 5)
			->conditionRaw('Model.field6 & 6 = 6')
			->get()
		;

		$this->assertEquals($expected, $actual);
	}
}