<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use AdventOfCode2016\Day01\Retriever;

class RetrieverTest extends TestCase
{
    protected $retriever;

    protected function setUp()
    {
        $this->retriever = new Retriever();
    }

    public function testMove1()
    {
        $this->retriever->move("R", 2);
        $this->retriever->move("L", 3);

        $distance = $this->retriever->getDistance();

        $this->assertEquals(5, $distance);
    }

    public function testMove2()
    {
        $this->retriever->move("R", 2);
        $this->retriever->move("R", 2);
        $this->retriever->move("R", 2);

        $distance = $this->retriever->getDistance();

        $this->assertEquals(2, $distance);
    }

    public function testMove3()
    {
        $this->retriever->move("R", 5);
        $this->retriever->move("L", 5);
        $this->retriever->move("R", 5);
        $this->retriever->move("R", 3);

        $distance = $this->retriever->getDistance();

        $this->assertEquals(12, $distance);
    }
}
