<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'cms',
        'price',
        'status',
        'initial_date',
        'final_date',
        'initial_time',
        'final_time',
    ];

    public function matches()
    {
        return $this->hasMany(Match::class);
    }

}
