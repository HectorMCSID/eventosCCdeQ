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
    
    public function consultar_direccion_evento(){
        if ($this->request->isAJAX()) {

            $modelo_salones = new Modelo_salones();
            // Obtiene el ID del evento desde los datos POST
            $id_evento = $this->request->getPost('id_evento');

            // Aquí puedes procesar `id_evento`, por ejemplo, buscar en la base de datos
            // Simulación de una dirección del evento (reemplaza con lógica real)
            $direccion = $modelo_salones
                ->select('direccion')
                ->where('id',$id_evento)
                ->first();

            // Respuesta en formato JSON
            $response = [
                'status' => 'success',
                'data' => $direccion,
            ];

            return $this->response->setJSON($response);
        } else {
            // Si no es una solicitud AJAX, redirige o muestra un mensaje de error
            return redirect()->back()->with('error', 'Solicitud no permitida');
        }
    }

    public function consultar_existencia_invitado(){
        if ($this->request->isAJAX()) {

            $modelo_invitados = new Modelo_invitados();
            // Obtiene el ID del evento desde los datos POST
            $email = $this->request->getPost('id');

            // Simulación de una dirección del evento (reemplaza con lógica real)
            if($modelo_invitados
                ->where('correo',$email)
                ->first()){
                    // Respuesta en formato JSON
                    $response = [
                        'status' => 'success'
                    ];
                } else {
                    $response = [
                        'status' => 'failed'
                    ];
                }
            return $this->response->setJSON($response);
        } else {
            // Si no es una solicitud AJAX, redirige o muestra un mensaje de error
            return redirect()->back()->with('error', 'Solicitud no permitida');
        }
    }

    public function consultar_existencia_empresa(){
        if ($this->request->isAJAX()) {

            $modelo_empresas = new Modelo_empresas();
            // Obtiene el ID del evento desde los datos POST
            $rfc = $this->request->getPost('id');

            // Simulación de una dirección del evento (reemplaza con lógica real)
            if($modelo_empresas
                ->where('RFC',$rfc)
                ->first()){
                    // Respuesta en formato JSON
                    $response = [
                        'status' => 'success'
                    ];
                } else {
                    // Respuesta en formato JSON
                    $response = [
                        'status' => 'failed'
                    ];
                }

            return $this->response->setJSON($response);
        } else {
            // Si no es una solicitud AJAX, redirige o muestra un mensaje de error
            return redirect()->back()->with('error', 'Solicitud no permitida');
        }
    }

}

?>