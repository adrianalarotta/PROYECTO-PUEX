<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitude extends Model
{
    protected $table = 'solicitudes';
    protected $primaryKey = 'id';
    use HasFactory;
}
