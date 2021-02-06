<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Order;

class OrdersTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_a_user_can_create_an_order() {
        $this->withoutExceptionHandling();
        $order = Order::factory()->make(['abolished' => null, 'status' => true]);


        $this->post('/orders', $order->toArray());


        $this->assertDatabaseHas('orders', [
            'name' => $order->name,
        ]);
    }
    
}
