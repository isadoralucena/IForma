<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
use App\Providers\RouteServiceProvider;

class RoutesTest extends TestCase
{
    public function routesProvider()
    {
        return [
            ["/contents"],
            ["/contents/create"],
            ["/contents/delete"],
            ["/contents/edit"],
            ["/contents/teachercontrolpane"],
            ["/contents/admincontrolpanecont"],
        ];
    }
    public function test_base_route()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    /**
    * @dataProvider routesProvider
    */
    public function test_routes_contents_with_no_login($route)
    {
        $response = $this->get($route);
        $response->assertStatus(302);
    }

    public function test_route_contents_with_login()
    {
        $user = User::factory()->create();
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => 'password',
        ]);
        $this->assertAuthenticated();
        $response = $this->get('/contents');
        $response->assertStatus(200);
    }
}
