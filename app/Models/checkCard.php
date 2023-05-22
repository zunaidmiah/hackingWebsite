<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class checkCard extends Model
{
    use HasFactory;
    protected $table='check_cards';
    protected $fillable=['number'];
}
