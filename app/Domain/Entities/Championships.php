<?php

namespace App\Domain\Entities;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Championships extends Model
{
    use HasFactory;

    protected $table = 'championships';
}
