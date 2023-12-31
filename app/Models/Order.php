<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    use HasFactory;
    protected $fillable = ['cart_id','item_size_id','quantity','payment','notes'];

    public function cart(){
        return $this->belongsTo(Cart::class,'cart_id');
    }
    public function item(){
        return $this->belongsTo(Item_size::class,'item_size_id');
    }
}
