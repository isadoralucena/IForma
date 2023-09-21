<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Content;

class ContentTest extends TestCase
{

    public function validContentProvider(){
        return [
            ["texto 123"],
            ["Mutcho texto lorem  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui laudantium ullam eos eligendi quidem! Mollitia facilis voluptates sunt minus autem aliquam tempora consequuntur at dolores cum. Quasi sed incidunt debitis?"]
        ];
    }

    /**
    * @dataProvider validContentProvider
    */
    public function test_valid_content($valid_content)
    {
        $this->assertTrue(Content::validateText($valid_content));
    }

    public function invalidContentProvider(){
        return [
            ["😊😉😉"],
            [null],
            ["olá 😊😉😉"]
        ];
    }

    /**
    * @dataProvider invalidContentProvider
    */
    public function test_invalid_content($invalid_content)
    {
        $this->assertFalse(Content::validateText($invalid_content));
    }
    
}
