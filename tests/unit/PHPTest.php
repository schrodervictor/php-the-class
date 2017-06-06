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

        $expected = preg_match($pattern, $subject, $expectedMatches);
        $result = PHP::preg_match($pattern, $subject, $resultMatches);

        $this->assertSame($expected, $result);
        $this->assertEquals($expectedMatches, $resultMatches);
    }

    public function test_exec_withOneArg()
    {
        $expected = exec('echo hello 42');
        $result = PHP::exec('echo hello 42');

        $this->assertSame($expected, $result);
    }


    public function test_exec_withTwoArgs()
    {
        $expected = exec('echo hello 42', $expectedOutput);
        $result = PHP::exec('echo hello 42', $resultOutput);

        $this->assertSame($expected, $result);
        $this->assertSame($expectedOutput, $resultOutput);
    }


    public function test_exec_withThreeArgs()
    {
        $expected = exec('echo hello 42', $expectedOutput, $expectedCode);
        $result = PHP::exec('echo hello 42', $resultOutput, $resultCode);

        $this->assertSame($expected, $result);
        $this->assertSame($expectedOutput, $resultOutput);
        $this->assertSame($expectedCode, $resultCode);
    }
}
