<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UnitTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testInsertuser()
    {
        $user = new User();
        $user->name = 'ram';
        $user->email = 'ram@gmail.com';
        $user->password= 'ram';

        $this->assertTrue(true);
    }
}
