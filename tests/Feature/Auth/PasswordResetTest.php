<?php

namespace Tests\Feature\Auth;

use App\Models\Dealer;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Notification;
use Tests\TestCase;

class PasswordResetTest extends TestCase
{
    use RefreshDatabase;

    public function test_reset_password_link_screen_can_be_rendered()
    {
        $response = $this->get('/przypominanie-hasla');

        $response->assertStatus(200);
    }

    public function test_reset_password_link_can_be_requested()
    {
        Notification::fake();

        $dealer = Dealer::factory()->create();

        $this->post('/przypominanie-hasla', ['email' => $dealer->email]);

        Notification::assertSentTo($dealer, ResetPassword::class);
    }

    public function test_reset_password_screen_can_be_rendered()
    {
        Notification::fake();

        $dealer = Dealer::factory()->create();

        $this->post('/przypominanie-hasla', ['email' => $dealer->email]);

        Notification::assertSentTo($dealer, ResetPassword::class, function (
            $notification,
        ) {
            $response = $this->get(
                '/resetowanie-hasla/' . $notification->token,
            );

            $response->assertStatus(200);

            return true;
        });
    }

    public function test_password_can_be_reset_with_valid_token()
    {
        Notification::fake();

        $dealer = Dealer::factory()->create();

        $this->post('/przypominanie-hasla', ['email' => $dealer->email]);

        Notification::assertSentTo($dealer, ResetPassword::class, function (
            $notification,
        ) use ($dealer) {
            $response = $this->post('/resetowanie-hasla', [
                'token' => $notification->token,
                'email' => $dealer->email,
                'password' => 'password',
                'password_confirmation' => 'password',
            ]);

            $response->assertSessionHasNoErrors();

            return true;
        });
    }
}
