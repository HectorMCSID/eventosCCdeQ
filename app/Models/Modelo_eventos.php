<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelo_eventos extends Model
{
    protected $table = 'eventos'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria de la tabla

    // Configuración de campos permitidos
    protected $allowedFields = [
        'id',        // id clave
        'url_evento',        //liga para acceder al formulario
        'estatus',        //si esta programado, activo, lleno, finalizado, cancelado
        'fecha',        // fecha del evento
        'hora_comienzo',       
        'hora_final',        
        'numero_invitados',        //numero maximo de invitados
        'id_salon',        // id del salon
        'fecha_programacion',//a que fecha programaste el evento
        'nombre_evento',//a que fecha programaste el evento
        'descripcion_evento',//a que fecha programaste el evento
        'acceso',//Quienes se pueden registrar (publico general, funcionario de gobierno, empresarios, consejo, lideres, todos)
        'imagen_evento'


    ];
}