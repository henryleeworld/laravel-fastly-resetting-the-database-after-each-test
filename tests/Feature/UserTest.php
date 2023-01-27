<?php

namespace Tests\Feature;

use App\Models\User;
// use Illuminate\Foundation\Testing\RefreshDatabase;
use Plannr\Laravel\FastRefreshDatabase\Traits\FastRefreshDatabase;
use Tests\TestCase;

class UserTest extends TestCase
{
    use FastRefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_user_model_does_not_exist_in_the_database()
    {
        $user = User::factory()->create();
        $user->delete();
        $this->assertModelMissing($user);
    }
}
