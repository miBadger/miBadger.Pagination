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
 * The pagination test class.
 *
 * @since 1.0.0
 */
class PaginationTest extends \PHPUnit_Framework_TestCase
{
	/** @var String[] The items. */
	private $items;

	/** @var Pagination The pagination object. */
	private $pagination;

	public function setUp()
	{
		$this->items = ['one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten'];
		$this->pagination = new Pagination($this->items, 3);
	}

	public function testCount()
	{
		$this->assertCount(4, $this->pagination);
	}

	public function testGetIterator()
	{
		$this->assertEquals(new \ArrayIterator([['one', 'two', 'three'], ['four', 'five', 'six'], ['seven', 'eight', 'nine'], ['ten']]), $this->pagination->getIterator());
	}

	public function testGet()
	{
		$this->assertEquals(['one', 'two', 'three'], $this->pagination->get(0));
	}

	public function testToArray()
	{
		$this->assertEquals($this->items, $this->pagination->toArray());
	}

	public function testGetItemsPerPage()
	{
		$this->assertEquals(3, $this->pagination->getItemsPerPage());
	}

	/**
	 * @depends testGetItemsPerPage
	 */
	public function testSetItemsPerPage()
	{
		$this->assertNull($this->pagination->setItemsPerPage(5));
		$this->assertEquals(5, $this->pagination->getItemsPerPage());
	}
}
