<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Match extends Model
{
    use HasFactory;

    protected $fillable = [
        'ticket_id',
        'team_one',
        'team_two',
        'winner',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}