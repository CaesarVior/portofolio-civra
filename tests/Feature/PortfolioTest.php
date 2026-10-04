<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_renders_projects(): void
    {
        Project::create(['title' => 'Test Project', 'description' => 'Test']);

        $this->get('/')->assertOk()->assertSee('Test Project');
    }

    public function test_admin_is_password_protected(): void
    {
        $this->get('/admin/projects')->assertOk()->assertSee('Password');

        $this->post('/admin/projects', ['action' => 'login', 'password' => 'wrong'])
            ->assertSessionHasErrors('password');
    }
}
