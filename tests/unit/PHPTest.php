<?php

use PHPUnit\Framework\TestCase;

class PHPTest extends TestCase
{
    public function test_strpos()
    {
        $result = PHP::strpos('club-mate', '-');
        $expected = strpos('club-mate', '-');

        $this->assertSame($expected, $result);
    }
}
