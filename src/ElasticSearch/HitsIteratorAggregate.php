<?php

namespace Matchish\ScoutElasticSearch\ElasticSearch;

use Traversable;

interface HitsIteratorAggregate extends \IteratorAggregate {


    public function __construct(array $results, callable $callback = null);

    public function getIterator();

}