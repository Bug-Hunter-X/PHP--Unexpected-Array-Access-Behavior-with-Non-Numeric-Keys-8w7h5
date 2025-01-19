# PHP: Unexpected Array Access Behavior with Non-Numeric Keys

This repository demonstrates a common yet easily overlooked error in PHP related to accessing array elements using numerical indices when the array keys are strings (not numerical).

## The Bug
The `bug.php` file contains code that iterates over an associative array (an array with string keys).  However, attempting to access elements using numerical indices results in an unexpected `NULL` or an undefined offset notice. 

## The Solution
The `bugSolution.php` file provides the correct way to access the elements of such an associative array, using the string keys to correctly retrieve values.