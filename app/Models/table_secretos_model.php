<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class table_secretos_model extends Model
{

    protected $table = 'secretos';
    protected $primaryKey = 'id';
    protected $fillable = ['Titulo', 'Descripcion'];

    use HasFactory;
}
