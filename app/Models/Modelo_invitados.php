<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelo_invitados extends Model
{
    protected $table = 'invitados'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria de la tabla

    // Configuración de campos permitidos
    protected $allowedFields = [
        'id',        // id clave
        'nombre',        
        'correo',       
        'celular',        
        'tipo',         //tipo de invitado (empleado, publico, etc)
        'cargo',        //en caso de que sea funcionario de gobierno, que cargo tiene
        'fecha_nacimiento',       
        'id_empresa',        //a que empresa pertenece
        'estatus' //si esta activo o desactivado

    ];
}