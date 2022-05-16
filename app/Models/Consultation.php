<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $table = 'consultation';
    protected $primaryKey = ['staff_id','day','start'];
    public $incrementing = false;
    public $timestamps = false;
}
