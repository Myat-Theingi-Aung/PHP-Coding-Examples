<?php
class Stack {
  private $items;

  public function __construct() {
    $this->items = [];
  }

  public function push($item) {
    array_push($this->items, $item);
  }

  public function pop() {
    return (!$this->is_empty()) ? array_pop($this->items) : 'none';
  }

  public function peek() {
    return (!$this->is_empty()) ? end($this->items) : 'none';
  }

  public function is_empty() {
      return empty($this->items);
  }
}

$stack = new Stack();

echo "Pop from Stack: " . $stack->pop(). "\n";
echo "Peek from Stack: " . $stack->peek() . "\n";

$stack->push(1);
$stack->push(2);
$stack->push(3);

print_r($stack);

echo "Top of the Stack: " . $stack->peek() . "\n";

echo "Remove top of the Stack: ". $stack->pop() . "\n";

print_r($stack);
?>
