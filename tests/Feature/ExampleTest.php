<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class ExampleTest extends TestCase
{
    // use DatabaseTransactions;
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        Product::factory()->count(10)->create()->each(function ($product) {
            printf("ID: {$product->id}\n");
        });

        $this->assertTrue(true);
    }
}
