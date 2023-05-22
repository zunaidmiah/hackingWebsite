<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spamCard extends Model
{
    use HasFactory;
    protected $table= 'spam_cards';
    protected $fillable= ['cardNumber', 'ccv','exDate'];
}
