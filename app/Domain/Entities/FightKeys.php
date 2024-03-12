<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FightKeys extends Model
{
    use HasFactory;

    protected $table = 'fight_keys';
}
