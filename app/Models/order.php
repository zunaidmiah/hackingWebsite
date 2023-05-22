<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    use HasFactory;
    protected $table= 'orders';
    protected $fillable= ['order_id','username', 'email','product','amount','item_id','tran_id','status'];
}
