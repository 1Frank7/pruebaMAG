<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ubicacion extends Model
{
    use HasFactory;
    
    protected $table = 'ubicacion';
    
    protected $primary_key = 'idubicacion';

    public $timestamps = false;

}
