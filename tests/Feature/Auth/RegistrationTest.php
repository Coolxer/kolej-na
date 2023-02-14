<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    public function test_registration_screen_can_be_rendered()
    {
        $response = $this->get('/rejestracja');

        $response->assertStatus(200);
    }

    public function test_new_users_can_register()
    {
        $response = $this->post('/rejestracja', [
            'first_name' => 'Test',
            'last_name' => 'User',
            'company' => 'appeczka',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
            'terms_of_service' => true,
            'policy' => true,
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(RouteServiceProvider::HOME);
    }
}
