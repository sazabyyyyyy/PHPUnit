<?php

use  PHPUnit\Framework\TestCase;

class MessageTest extends TestCase{
    public function testGet():void{
        $messsage = new Message('hello');
        $this->assertEquals('hello',$messsage->get());
    }
}
