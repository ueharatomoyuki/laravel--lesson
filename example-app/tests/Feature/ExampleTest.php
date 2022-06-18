<?php

namespace Tests\Feature;

use App\Http\Controllers\AnimalController;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\Animal;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function test_sum()
    {
        $num1 = 1;
        $num2 = 5;
        $sum = $num1 + $num2;
        $expect = 6;
        $this->assertSame($expect,$sum);
    }

    public function test_animal()
    {
        $animal = new AnimalController;
        $bool = $animal->multiplejudge(30);
        $this->assertTrue($bool);
    }
}
