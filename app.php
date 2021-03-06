<?php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

use AdventOfCode2016\Day01\Day01Command;
use AdventOfCode2016\Day02\Day02Command;
use AdventOfCode2016\Day03\Day03Command;
use AdventOfCode2016\Day04\Day04Command;
use AdventOfCode2016\Day05\Day05Command;
use AdventOfCode2016\Day06\Day06Command;
use AdventOfCode2016\Day07\Day07Command;
use AdventOfCode2016\Day08\Day08Command;
use AdventOfCode2016\Day09\Day09Command;
use AdventOfCode2016\Day10\Day10Command;
use AdventOfCode2016\Day11\Day11Command;
use AdventOfCode2016\Day12\Day12Command;
use AdventOfCode2016\Day13\Day13Command;
use AdventOfCode2016\Day14\Day14Command;
use AdventOfCode2016\Day15\Day15Command;
use AdventOfCode2016\Day16\Day16Command;

$application = new Application();

// Commands
$application->add(new Day01Command());
$application->add(new Day02Command());
$application->add(new Day03Command());
$application->add(new Day04Command());
$application->add(new Day05Command());
$application->add(new Day06Command());
$application->add(new Day07Command());
$application->add(new Day08Command());
$application->add(new Day09Command());
$application->add(new Day10Command());
$application->add(new Day11Command());
$application->add(new Day12Command());
$application->add(new Day13Command());
$application->add(new Day14Command());
$application->add(new Day15Command());
$application->add(new Day16Command());

$application->run();
