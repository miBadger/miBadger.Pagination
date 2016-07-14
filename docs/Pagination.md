# Pagination

The pagination class.

## Example(s)

```php
<?php

use miBadger\Pagination\Pagination;

/**
 * Construct a pagination object with the given items en items per page.
 */
$pagination = new Pagination(array $items, $itemsPerPage = self::DEFAULT_ITEMS_PER_PAGE);

/**
 * {@inheritdoc}
 */
$pagination->count();

/**
 * {@inheritdoc}
 */
$pagination->getIterator();

/**
 * Returns the items on the given page number.
 */
$pagination->get($index);

/**
 * Returns an array containing all of the elements in this pagination object.
 */
$pagination->toArray();

/**
 * Returns the items per page.
 */
$pagination->getItemsPerPage();

/**
 * Returns the items per page.
 */
$pagination->setItemsPerPage($itemsPerPage = self::DEFAULT_ITEMS_PER_PAGE);
```
