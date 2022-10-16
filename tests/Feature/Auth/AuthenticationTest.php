<?php

namespace Tests\Feature\Auth;

use App\Models\Dealer;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_screen_can_be_rendered()
    {
        $response = $this->get('/logowanie');

        $response->assertStatus(200);
    }

    public function test_dealers_can_authenticate_using_the_login_screen()
    {
        $dealer = Dealer::factory()->create();

        $response = $this->post('/logowanie', [
            'email' => $dealer->email,
            'password' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }

    public function test_dealers_can_not_authenticate_with_invalid_password()
    {
        $dealer = Dealer::factory()->create();

        $this->post('/logowanie', [
            'email' => $dealer->email,
            'password' => 'wrong-password',
        ]);

        $this->assertGuest();
    }
}
