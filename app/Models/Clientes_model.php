<?php

namespace App\Models;

use CodeIgniter\Model;

class Clientes_model extends Model
{
    protected $table = 'clientes';
    protected $primaryKey = 'idclientes';
    protected $allowedFields = ['nombre', 'telefono', 'fecha_de_nacimiento'];
}
