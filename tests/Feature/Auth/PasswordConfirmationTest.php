<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Http\Request;

class PasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function test_confirm_password_screen_can_be_rendered()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get('/potwierdzanie-hasla');

        $response->assertStatus(200);
    }

    public function test_password_can_be_confirmed()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/potwierdzanie-hasla', [
            'password' => 'password',
        ]);

        $response->assertRedirect();
        $response->assertSessionHasNoErrors();
    }

    public function test_password_is_not_confirmed_with_invalid_password()
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->post('/potwierdzanie-hasla', [
            'password' => 'wrong-password',
        ]);

        $response->assertSessionHasErrors();
    }
}
