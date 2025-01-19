In PHP, a common yet easily overlooked error arises when dealing with array keys that are not strictly numeric.  Consider this scenario:

```php
$myArray = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($myArray as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

//Attempting to access using array index like so:

echo "Value at index 0:" . $myArray[0];
```

While the foreach loop iterates correctly, attempting to access array elements using numerical indices (like `$myArray[0]`) will result in an unexpected `NULL` or an undefined offset notice. This is because the keys are strings ('a', 'b', 'c'), not numerical indices (0, 1, 2).