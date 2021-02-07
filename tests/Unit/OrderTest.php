<?php

namespace Tests\Unit;

use App\Models\Order;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class OrderTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_it_knows_its_path() {
        $order = Order::factory()->create();

        $this->assertEquals($order->path(), '/orders/' . $order->id);
    }

    public function test_it_can_tell_its_status() {
        $order = Order::factory()->create();

        $order->status = false;
        $this->assertEquals('Ожидает', $order->status());


        $order->status = true;
        $this->assertEquals('В пути', $order->status());


        $order->status = null;
        $this->assertEquals('Отменен', $order->status());
    }
}
