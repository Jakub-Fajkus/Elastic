<?php declare(strict_types=1);

namespace Pd\ElasticSearchModule\Model\ElasticQuery\Query;

use Pd;


class ShouldCollection implements Pd\ElasticSearchModule\Model\ElasticQuery\ICollection
{

	/**
	 * @var ILeafQuery[]
	 */
	private $collection;


	public function __construct(
		ILeafQuery ... $collection
	)
	{
		$this->collection = $collection;
	}


	public function getIterator()
	{
		return new \ArrayIterator($this->collection);
	}


	public function add(ILeafQuery $should)
	{
		$this->collection[] = $should;
	}
}
