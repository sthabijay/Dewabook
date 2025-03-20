<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = ['itemName', 'tag', 'balance', 'isIn'];
    /** @use HasFactory<\Database\Factories\ItemsFactory> */
    use HasFactory;
}
