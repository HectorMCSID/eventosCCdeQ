<?php
namespace App\Controllers;

use App\Models\Modelo_boletos;
use App\Models\Modelo_empresas;
use App\Models\Modelo_eventos;
use App\Models\Modelo_invitados;
use App\Models\Modelo_salones;

class Consultas_base_de_datos extends BaseController
{
    public function verificar_url_evento($url_evento)
    {
        $modelo_eventos = new Modelo_eventos();
        
        // Buscar el primer registro que coincida con la URL del evento
        $evento = $modelo_eventos
            ->where('url_evento', $url_evento)
            ->where('estatus','Activo')
            ->first();
    
        // Retornar el resultado (retornará null si no hay coincidencia)
        return $evento;
    }    

}

?>