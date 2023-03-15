<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Times extends Model
{
    use HasFactory;
    protected $fillable = ['nome', 'sede', 'cor', 'dt_fund'];
}
