<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelo_salones extends Model
{
    protected $table = 'salones'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria de la tabla

    // Configuración de campos permitidos
    protected $allowedFields = [
        'id',        // id clave
        'nombre',        
        'direccion',       
        'horario_apertura',        
        'horario_cierra',       
        'minimo_invitados',       
        'maximo_invitado',  
        'estatus' //si esta activo o desactivado

    ];
}