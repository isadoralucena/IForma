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
        $user = User::factory()->make();
        if(!filter_var($user->email, FILTER_VALIDATE_EMAIL)){
            throw new Exception(
                "Email inválido: " . $user->email
            );
        }
        $this->assertTrue(true);
    }

}
