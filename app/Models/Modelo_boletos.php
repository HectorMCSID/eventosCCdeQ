<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelo_boletos extends Model
{
    protected $table = 'boletos'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria de la tabla

    // Configuración de campos permitidos
    protected $allowedFields = [
        'id',        // id de la invitacion
        'id_evento',   // id del evento
        'url',  // url del QR
        'estatus', // estatus del boleto
        'correo'    // correo del invitado
    ];
}