<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public static function unsell()
    {
        return self::where('sell', false);
    }

    public static function sell()
    {
        return self::where('sell', true);
    }
}
