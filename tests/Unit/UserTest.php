<?php

namespace Tests\Unit;

use App\Http\Controllers\TestController;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $user = new TestController(18, 'John');

        $this->assertSame('John', $user->name);
        $this->assertSame(18, $user->age);
        $this->assertEmpty($user->favorite_movies);
        // $this->assertTrue(true);
    }
}
