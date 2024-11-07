<?php

namespace App\Models;

use CodeIgniter\Model;

class Modelo_empresas extends Model
{
    protected $table = 'empresas'; // Nombre de la tabla
    protected $primaryKey = 'id'; // Clave primaria de la tabla

    // Configuración de campos permitidos
    protected $allowedFields = [
        'id',        // id clave
        'RFC',        //RFC de la empresa
        'nombre_comercial',        //nombre comercial de la empresa
        'razon_social',        //la razon social de la empresa
        'direccion_comercial',        //su direccion comercial
        'telefono_oficina',        //su telefono oficina
        'tipo_empresa',        //si es una empresa fisica o moral
        'direccion_fiscal',        //direccion fiscal de la emrpesa
        'venden',        //un opcion de si venden productos, servicios o ambos
        'aniversario',        //la fecha de aniversario
        'numero_afiliacion',        //su numero de afiliacion
        'comprobante_afliliacion',        //el nombre con extension del archivo comprobante
        'descripcion_productos',        //la descripcion de que productos venden
        'descripcion_empresa',        //la descripcion de que tipo de empresas desean vender
        'estatus',        //si esta activa o desactivada
    ];
}