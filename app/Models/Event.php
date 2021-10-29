<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'end_date',
    ];

    protected $dates = ['start_date', 'end_date'];

    public static function search($term)
    {
        return self::query()->where('name', 'like', "%{$term}%")->get();
    }
}
