<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Content;
use App\Models\User;

class ContentTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_valid_content()
    {
        $textoValido = "Este é um texto válido. 123";
        $this->assertTrue(Content::validateText($textoValido));
    }

    public function test_invalid_content()
    {
        $textoInvalido = "😊😉😉";
        $this->assertFalse(Content::validateText($textoInvalido));
    }

    
}
