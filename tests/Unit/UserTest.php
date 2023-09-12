<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\User;
use Exception;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_email()
    {
        $endereco = 'isadora@gmail.com';
        if(!filter_var($endereco, FILTER_VALIDATE_EMAIL)){
            throw new Exception(
                "Email inválido: " . $endereco
            );
        }
        $this->assertTrue(true);
    }

}
