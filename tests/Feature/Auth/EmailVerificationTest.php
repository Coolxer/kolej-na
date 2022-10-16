<?php

namespace Tests\Feature\Auth;

use App\Models\Dealer;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\URL;
use Tests\TestCase;

class EmailVerificationTest extends TestCase
{
    use RefreshDatabase;

    public function test_email_verification_screen_can_be_rendered()
    {
        $dealer = Dealer::factory()->create([
            'email_verified_at' => null,
        ]);

        $response = $this->actingAs($dealer)->get('/weryfikacja-email');

        $response->assertStatus(200);
    }

    public function test_email_can_be_verified()
    {
        $dealer = Dealer::factory()->create([
            'email_verified_at' => null,
        ]);

        Event::fake();

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $dealer->id, 'hash' => sha1($dealer->email)],
        );

        $response = $this->actingAs($dealer)->get($verificationUrl);

        Event::assertDispatched(Verified::class);
        $this->assertTrue($dealer->fresh()->hasVerifiedEmail());
        $response->assertRedirect(RouteServiceProvider::HOME . '?verified=1');
    }

    public function test_email_is_not_verified_with_invalid_hash()
    {
        $dealer = Dealer::factory()->create([
            'email_verified_at' => null,
        ]);

        $verificationUrl = URL::temporarySignedRoute(
            'verification.verify',
            now()->addMinutes(60),
            ['id' => $dealer->id, 'hash' => sha1('wrong-email')],
        );

        $this->actingAs($dealer)->get($verificationUrl);

        $this->assertFalse($dealer->fresh()->hasVerifiedEmail());
    }
}
