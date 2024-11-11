<?php

namespace App\Controllers;

use App\Controllers\Consultas_base_de_datos;

class Redirecciones_route extends BaseController
{
    public function vista_index($url_evento)
    {
        //busca informacion del evento
        $consultasController = new Consultas_base_de_datos();
        $evento = $consultasController->verificar_url_evento($url_evento);

        return view('index', ['evento' => $evento,'url_evento_actual' => $url_evento]);
    }

    public function vista_registrar_invitados($id, $url)
    {
        return view('registro_invitados', ['id' => $id, 'url' => $url]);
    }


    public function vista_registrar_empresas($id, $url)
    {
        return view('registro_empresas', ['id' => $id, 'url' => $url]);
    }
}
