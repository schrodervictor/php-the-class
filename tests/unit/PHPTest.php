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


    public function test_preg_match_withTwoArgs()
    {
        $pattern = '/(mate)/';
        $subject = 'club-mate at 2:36';

        $expected = preg_match($pattern, $subject);
        $result = PHP::preg_match($pattern, $subject);

        $this->assertSame($expected, $result);
    }


    public function test_preg_match_withThreeArgs()
    {
        $pattern = '/(mate)/';
        $subject = 'club-mate at 2:36';

        $expected = preg_match($pattern, $subject, $matchesExpected);
        $result = PHP::preg_match($pattern, $subject, $matchesResult);

        $this->assertSame($expected, $result);
        $this->assertEquals($matchesExpected, $matchesResult);
    }
}
