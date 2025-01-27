# PHP Pass-by-Reference Issue with Nested Arrays and isset()

This repository demonstrates an uncommon bug in PHP related to pass-by-reference behavior with nested arrays and the `isset()` function.  The `increment_array_value` function is intended to increment an array value, but it exhibits unexpected behavior when dealing with nested arrays.

The issue is that when using isset(), the nested array element is copied during the check, so further changes made using the reference do not reflect in the original array.

## Steps to Reproduce
1. Clone this repository.
2. Run `bug.php`.
3. Observe that the nested array's value is only incremented once, despite calling the function twice.

## Solution
The solution involves removing the isset() check and using the null coalescing operator instead. This ensures the reference always points to the original nested array.