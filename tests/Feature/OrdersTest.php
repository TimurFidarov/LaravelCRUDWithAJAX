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

    public function test_a_user_can_change_status_of_the_order() {
        $this->withoutExceptionHandling();

        $order = Order::factory()->create([
           'status' => false
        ]);

        $this->post('/orders', $order->toArray());


        //change to completed

        $this->patch('/orders/' . $order->id, ['status' => true]);
        $this->assertTrue($order->fresh()->status);


        //change to awaiting

        $this->patch('/orders/' . $order->id, ['status' => false]);
        $this->assertFalse($order->fresh()->status);


        //change to abolished
        $this->patch('/orders/' . $order->id, ['status' => 'abolished']);
        $this->assertNull($order->fresh()->status);

    }
}
