<?php

use PHPUnit\Framework\TestCase;

class PHPQuickCheck extends TestCase
{
    /**
     * @test
     * @dataProvider strposArgGen
     */
    public function prop_strpos($haystack, $needle, $offset)
    {
        $this->assertSame(
            strpos($haystack, $needle, $offset),
            PHP::strpos($haystack, $needle, $offset)
        );
    }


    public function strposArgGen()
    {
        $args = [];

        for ($i = 0; $i < 100; $i++) {
            $args[] = [
                md5(uniqid(mt_rand(), true)),
                substr(md5(uniqid(mt_rand(), true)), 1, 2),
                rand(0, 10)
            ];
        }

        return $args;
    }
}
