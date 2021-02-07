<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'price' => 'integer'
    ];


    public function path() {
        return '/orders/' . $this->id;
    }


    public function status() {
        if($this->status) return 'В пути';
        if($this->status === false) return 'Ожидает';
        return 'Отменен';
    }
}
