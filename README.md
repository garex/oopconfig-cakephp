# OOP config module for CakePHP

Module for [OOP config](https://github.com/garex/oopconfig), for [CakePHP](http://cakephp.org/).
Helps to get such config array in OOP way with code completion
and documentation:

```php
	array(
	    'conditions' => array('Model.field' => 123),
	    'recursive'  => 1,
	    'fields'     => array('Model.field1', 'DISTINCT Model.field2'),
	    'order'      => array('Model.created', 'Model.field3 DESC'),
	    'group'      => array('Model.field'),
	    'limit'      => 100,
	    'page'       => 1,
	    'offset'     => 10,
	    'callbacks'  => true
	)
```

Example config array is taken from [Retrieving Your Data](http://book.cakephp.org/2.0/en/models/retrieving-your-data.html)