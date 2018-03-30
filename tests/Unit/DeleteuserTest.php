<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class DeleteuserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testDeleteUser()
    {
        $user = new User();
        $user->name = ' vijay';
        $user->email = 'vijay@example.com';
        $user->password = 'xyzzzkjhkjad234';
        $user->save();

        $this->assertTrue($user->delete());
    }




}
