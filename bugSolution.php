```php
<?php
function increment_array_value(&$arr, $key) {
  $arr[$key] = ($arr[$key] ?? 0) + 1; 
}

$my_array = [];
increment_array_value($my_array, 'count');
echo $my_array['count']; // Outputs 1
increment_array_value($my_array, 'count');
echo $my_array['count']; // Outputs 2

//The unexpected behavior is now fixed
$nested_array = ['a' => ['count' => 0]];
increment_array_value($nested_array['a'], 'count');
echo $nested_array['a']['count']; // Outputs 1
increment_array_value($nested_array['a'], 'count');
echo $nested_array['a']['count']; //Outputs 2
?>
```