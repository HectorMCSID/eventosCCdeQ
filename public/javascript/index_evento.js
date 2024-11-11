async function crear_formulario_eventos(evento) {
    try {
        // Consulta en ajax la dirección del evento y espera la respuesta
        const direccion_evento = await consultar_direccion_evento(evento);

        // Crear el HTML dinámico usando los valores del objeto 'evento'
        const contenidoHTML = `

            <div class="vista_previa_imagen">
                <img  src="http://localhost/eventosCCdeQ/archivos_eventos/imagenes_evento/${evento.imagen_evento}" />
            </div>
            <div class="vista_previa_informacion">

            <div class="recuadro_scroll">
                <div class="recuadro_titulo">
                    <h1>${evento.nombre_evento}</h1>
                    <img  src="http://localhost/eventosCCdeQ/public/imagenes_pagina/logo_blanco.png" />
                </div>
                <div class="recuadro_informacion">
                    <p><strong>ID del evento: </strong>${evento.id}</p>
                    <p><strong>Descripcion del evento: </strong>${evento.descripcion_evento}</p>
                    <p><strong>Fecha: </strong>${evento.fecha}</p>
                    <p><strong>Hora del evento: </strong>${evento.hora_comienzo}</p>
                    <p><strong>Boletos disponibles: </strong>${evento.numero_invitados}</p>
                    <p><strong>Direccion del evento: </strong>${direccion_evento.direccion || 'No disponible'}</p> <!-- Aquí se usa la dirección correctamente -->
                    <p><strong>Acceso del publico: </strong>${evento.acceso}</p>
                </div>
            </div>
            
            
           
            <form class="formulario_inicial" id="miFormulario">
                <div>
                    <h2>¿Eres empresa o invitado general?</h2>
                    <select id="select_tipo_invitado">
                        <option value="Empresa">Empresa</option>
                        <option value="Invitado">Invitado</option>
                    </select>
                    <input id="input_text" type="text" minLength = "12" maxLength = "13"name="rfc" placeholder="Ingrese su RFC" required>
                    <button type="submit">Obtener boleto</button>
                </div>
            </form>
            
            
            </div>

        `;

        // Aquí insertas el contenidoHTML en el DOM
        document.body.innerHTML = contenidoHTML;

        // Ahora que el contenido ha sido insertado, agregar el evento
        document.getElementById('select_tipo_invitado').addEventListener('change', function() {
            const seleccion = this.value;
            const input_text = document.getElementById('input_text');
            
            if (seleccion === 'Empresa') {
                input_text.type = 'text';
                input_text.placeholder = 'Ingrese su RFC';
                input_text.name = 'rfc';
                input_text.minLength = 12;
                input_text.maxLength = 13;
                input_text.value = '';
            } else {
                input_text.type = 'email';
                input_text.placeholder = 'Ingrese su correo electronico';
                input_text.name = 'email';
                input_text.value = '';
                input_text.removeAttribute('minlength');
                input_text.removeAttribute('maxlength');
            }
        });

        // Capturar el evento de envío del formulario
        document.getElementById('miFormulario').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevenir el envío tradicional del formulario

            const id = document.getElementById('input_text').value;

            // Llamar a la función enviarDatos y pasarle los datos del formulario
            consultar_existencia_usuario(id);
        });

    } catch (error) {
        console.error('Error al consultar la dirección del evento:', error);
    }
}

function consultar_direccion_evento(evento) {
    const id_evento = evento.id_salon;
    return new Promise((resolve, reject) => {
        $.ajax({
            url: url_consultar_direccion_evento,  // URL de tu método en el controlador
            type: 'POST',  // Método de la solicitud, puede ser GET o POST
            data: { id_evento: id_evento },  // Envía el dato como un objeto clave-valor
            dataType: 'json',  // Tipo de datos esperados en respuesta
            success: function(response) {
                if (response.status === 'success') {
                    console.log("Direccion:", response.data);  // Asegúrate de que 'response.data' sea un objeto con la dirección
                    resolve(response.data); // Resuelve la promesa con los datos
                } else {
                    reject('Error: ' + response.message);
                }
            },
            error: function(xhr, status, error) {
                reject('Error en la solicitud AJAX: ' + error);
            }
        });
    });
}




// Función que recibirá los datos del formulario
function consultar_existencia_usuario(id) {
    const input_text = document.getElementById('input_text');
    if(input_text.type =="email"){
        //buscar si existe una persona
        $.ajax({
            url: url_consultar_existencia_invitado,  // URL de tu método en el controlador
            type: 'POST',  // Método de la solicitud, puede ser GET o POST
            data: { id: id },  // Envía el dato como un objeto clave-valor
            dataType: 'json',  // Tipo de datos esperados en respuesta
            success: function(response) {
                if (response.status === 'success') {
                    console.log("El invitado existe");  // Asegúrate de que 'response.data' sea un objeto con la dirección
                } else {
                    console.log("El invitado no existe");  // Asegúrate de que 'response.data' sea un objeto con la dirección
                    window.location.assign(url_registrar_invitados+'/'+id+'/'+url_evento_actual);
                }
            },
            error: function(xhr, status, error) {
                reject('Error en la solicitud AJAX: ' + error);
            }
        });


    } else {
        //buscar si existe una empresa
        $.ajax({
            url: url_consultar_existencia_empresa,  // URL de tu método en el controlador
            type: 'POST',  // Método de la solicitud, puede ser GET o POST
            data: { id: id },  // Envía el dato como un objeto clave-valor
            dataType: 'json',  // Tipo de datos esperados en respuesta
            success: function(response) {
                if (response.status === 'success') {
                    console.log("Si existe la empresa");  // Asegúrate de que 'response.data' sea un objeto con la dirección
                } else {
                    console.log("No existe la empresa");  // Asegúrate de que 'response.data' sea un objeto con la dirección
                    window.location.assign(url_registrar_empresas+'/'+id+'/'+url_evento_actual);
                }
            },
            error: function(xhr, status, error) {
                reject('Error en la solicitud AJAX: ' + error);
            }
        });
    }
}

function consultar_si_tiene_boleto(datos) {



}

