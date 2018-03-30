<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UpdateuserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
      public function testUpdateuser()
    {
        $user = User::find(20);

        $user->name = 'Steve Smith';
        $user->email = 'steve@gmail.com';
        $user->password= 'steve';
        $this->assertTrue($user->save());
    }




}
