<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'status' => 'boolean',
        'abolished' => 'boolean',
        'price' => 'integer'
    ];


    public function path() {
        return '/orders/' . $this->id;
    }

    public function abolish() {
        $this->abolished = true;
        $this->status = null;
    }
}
