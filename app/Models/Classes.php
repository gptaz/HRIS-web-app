<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classes extends Model
{
    use HasFactory;
    protected $table = 'class';
    protected $primaryKey = ['unit_code','campus','day','start'];
    public $incrementing = false;
    public $timestamps = false;
}
