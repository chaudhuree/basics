<?php
class MyCollection implements IteratorAggregate
{
    private $items =array();


    // public function __construct()
    // {
    //     $this->items = ['foo', 'bar', 'baz'];
    // }
    public function addItem($item)
    {
        array_push($this->items, $item);
    }

    public function getIterator():Traversable
    {
        return new ArrayIterator($this->items);
    }
}

$collection = new MyCollection();
$collection->addItem('foo');
$collection->addItem('bar');

foreach ($collection as $item) {
    echo $item . "\n";
}
