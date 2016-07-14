# Pagination

[![Build Status](https://scrutinizer-ci.com/g/miBadger/miBadger.Pagination/badges/build.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Pagination/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/miBadger/miBadger.Pagination/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Pagination/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/miBadger/miBadger.Pagination/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/miBadger/miBadger.Pagination/?branch=master)

The Pagination Component.

## Example

```php
<?php

use miBadger\Pagination\Pagination;

/**
 * Create a new pagination object with 10 items and 3 items per page.
 */
$pagination = new Pagination([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 3);

/**
 * Returns the items on page 0.
 */
$pagination->get(0); // [1, 2, 3]

/**
 * Returns the items on page 1.
 */
$pagination->get(1); // [4, 5, 6]
```
