<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Order;

class OrdersTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_a_user_can_create_an_order() {
        $order = Order::factory()->make();
        $this->post('/orders', $order->toArray());
        $this->assertDatabaseHas('orders', [
            'name' => $order->name,
        ]);
    }
}
