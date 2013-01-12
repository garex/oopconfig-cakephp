# OOP config module for CakePHP

Module for [OOP config]( https://github.com/garex/oopconfig ), for [CakePHP]( http://cakephp.org/ ).
Helps to get complex config arrays in OOP way with code completion and documentation.

```php
    // Manual way
    $conditions = array(
        'conditions' => array(
            'Model.field' => 123,
            'Model.field5 BETWEEN ? AND ?' => array(5, 5),
            'Model.field8 NOT LIKE' => '%8%',
        ),
        'recursive'  => 1,
        'fields'     => array('Model.field1', 'DISTINCT Model.field2'),
        'order'      => array('Model.created', 'Model.field3 DESC'),
        'group'      => array('Model.field'),
        'limit'      => 100,
        'page'       => 1,
        'offset'     => 10,
        'callbacks'  => true,
    );
    
    // OOP config way
    $conditions = $this->findParams
        ->conditions
            ->is('Model.field', 123)
            ->between('Model.field5', 5, 5)
            ->notLike('Model.field8', '%8%')
            ->up()
        ->recursive(1)
        ->fields('Model.field1', 'DISTINCT Model.field2')
        ->order('Model.created', 'Model.field3 DESC')
        ->group('Model.field')
        ->limit(100)->page(1)->offset(10)
        ->callbacks(true)
        ->get()
    ;
```

Example config array is taken from [Retrieving Your Data]( http://book.cakephp.org/2.0/en/models/retrieving-your-data.html )