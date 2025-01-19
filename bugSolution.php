The correct way to access elements in an associative array is to use the string keys:

```php
$myArray = ['a' => 1, 'b' => 2, 'c' => 3];

foreach ($myArray as $key => $value) {
  echo "Key: $key, Value: $value\n";
}

// Correct way to access elements
echo "Value of 'a': " . $myArray['a'] . "\n";
echo "Value of 'b': " . $myArray['b'] . "\n";
echo "Value of 'c': " . $myArray['c'] . "\n";
```

This uses the string keys ('a', 'b', 'c') which are defined in the array and avoids the error of trying to access array elements using numerical indexes which is inappropriate for associative arrays.