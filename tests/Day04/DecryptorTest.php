<?php

namespace tests;

use PHPUnit\Framework\TestCase;
use AdventOfCode2016\Day04\Decryptor;

class DecryptorTest extends TestCase
{
    public function testItDecryptsAString()
    {
        $decryptor = new Decryptor();

        $decryptedString = $decryptor->decrypt('qzmt-zixmtkozy-ivhz', 343);

        $this->assertEquals('very encrypted name', $decryptedString);
    }
}
