<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AuthenticationTest extends TestCase
{
    use RefreshDatabase;

    public function test_guest_can_see_public_pages_and_cannot_open_dashboard(): void
    {
        $this->get('/')->assertOk()->assertSee('Transportes Semar')->assertSee('navbar');
        $this->get('/login')->assertOk()->assertSee('Bienvenido de vuelta')->assertSee('navbar');
        $this->get('/register')->assertOk()->assertSee('Crea tu cuenta')->assertSee('navbar');
        $this->get('/dashboard')->assertRedirect('/login');
    }

    public function test_user_can_register_login_and_logout(): void
    {
        $this->post('/register', [
            'name' => 'María Semar',
            'email' => 'maria@example.com',
            'password' => 'password123',
            'password_confirmation' => 'password123',
        ])->assertRedirect('/dashboard');

        $this->assertAuthenticatedAs(User::where('email', 'maria@example.com')->first());

        $this->get('/dashboard')->assertOk()->assertSee('Hola, María Semar')->assertSee('navbar');

        $this->post('/logout')->assertRedirect('/');
        $this->assertGuest();

        $this->post('/login', [
            'email' => 'maria@example.com',
            'password' => 'password123',
        ])->assertRedirect('/dashboard');
        $this->assertAuthenticated();
    }
}
