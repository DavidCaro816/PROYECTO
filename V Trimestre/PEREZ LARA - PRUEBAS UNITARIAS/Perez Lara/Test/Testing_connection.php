<?php
use Test\Connection;
require ('Connection.php');

class  Testing_connection extends \PHPUnit\Framework\TestCase
{

    public function test_connec()
    {
        $connec=(new Connection()) -> connect();
        $this->assertIsObject($connec, "Es de tipo objeto o no");
    }
}