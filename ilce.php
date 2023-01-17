<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ilce extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table = 'ilce';
    protected $primaryKey = 'id';
    protected $fillable = ['name','il_id'];
}
