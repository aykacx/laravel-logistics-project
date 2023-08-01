<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LogisticsModel extends Model
{
    use HasFactory;
    protected $table = 'logistics_load';
    protected $fillable = ['name','from','to','trailer_type','load_time','created_at','updated_at'];
}
