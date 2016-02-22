<?php

/**
 * This file is part of the miBadger package.
 *
 * @author Michael Webbers <michael@webbers.io>
 * @license http://opensource.org/licenses/Apache-2.0 Apache v2 License
 * @version 1.0.0
 */

namespace miBadger\Pagination;

/**
 * The pagination class.
 *
 * @since 1.0.0
 */
class Pagination implements \Countable, \IteratorAggregate
{
	const DEFAULT_ITEMS_PER_PAGE = 10;

	/** @var mixed[] The items */
	private $items;

	/** @var int The number of items */
	private $itemsPerPage;

	/**
	 * Construct a pagiantion object with the given items en items per page.
	 *
	 * @param mixed[] $items
	 * @param int $itemsPerPage
	 */
	public function __construct(array $items, $itemsPerPage = self::DEFAULT_ITEMS_PER_PAGE)
	{
		$this->items = $items;
		$this->itemsPerPage = $itemsPerPage;
	}

	/**
	 * {@inheritdoc}
	 */
	public function count()
	{
		return ceil(count($this->items) / $this->itemsPerPage);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getIterator()
	{
		return new \ArrayIterator(array_chunk($this->items, $this->itemsPerPage));
	}

	/**
	 * Returns the items on the given page number.
	 *
	 * @param int $index
	 * @return mixed[] the items on the given page number.
	 */
	public function get($index)
	{
		return array_slice($this->items, $index * $this->itemsPerPage, $this->itemsPerPage);
	}

	/**
	 * Returns an array containing all of the elements in this pagination object.
	 *
	 * @return mixed[] an array containing all of the elements in this pagination object.
	 */
	public function toArray()
	{
		return $this->items;
	}

	/**
	 * Returns the items per page.
	 *
	 * @return int the items per page.
	 */
	public function getItemsPerPage()
	{
		return $this->itemsPerPage;
	}

	/**
	 * Returns the items per page.
	 *
	 * @param $itemsPerPage = self::DEFAULT_ITEMS_PER_PAGE
	 * @return null
	 */
	public function setItemsPerPage($itemsPerPage = self::DEFAULT_ITEMS_PER_PAGE)
	{
		$this->itemsPerPage = $itemsPerPage;
	}
}
