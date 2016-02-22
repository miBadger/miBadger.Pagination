# Pagination

The pagination class.

## Example(s)

```php
// Create a new pagination object
$pagination = new Pagination([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 3);

// Get page 2
$pagination->get(1); // [4, 5, 6]
```
