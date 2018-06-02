<?php
use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testEmpty()
    {
        $stack = [];
        $this->assertSame(0, count($stack));
        return $stack;
    }

    /**
    * @depends testEmpty
    **/
    public function testPush(array $stack)
    {
        array_push($stack, 'foo');
        $this->assertSame(1, count($stack));
        $this->assertSame('foo', $stack[count($stack)-1]);
        return $stack;
    }

    /**
    * @depends testPush
    **/
    public function testPop(array $stack)
    {
         $this->assertSame('foo', array_pop($stack));
        $this->assertSame(0, count($stack));
    }

}
