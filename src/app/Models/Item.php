<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $appends = ['shopName', 'showPageUrl'];

    public function getShopNameAttribute()
    {
        return 'hoi';
    }
}
