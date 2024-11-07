function crear_formulario_eventos(evento){
    // Crear el HTML dinámico usando los valores del objeto 'evento'
    const contenidoHTML = `
        <h1>Detalles del evento</h1>
        <p>ID del evento: ${evento.id}</p>
        <p>Nombre del evento: ${evento.nombre_evento}</p>
        <p>Descripcion del evento: ${evento.descripcion_evento}</p>
        <p>Fecha: ${evento.fecha}</p>
        <p>Hora del evento: ${evento.hora_comienzo}</p>
        <p>Boletos disponibles: ${evento.numero_invitados}</p>
        <p>Direccion del evento: ${evento.id_salon}</p>
        <p>Acceso del publico: ${evento.acceso}</p>
        <img style="width:100px;" src="http://localhost/eventosCCdeQ/archivos_eventos/imagenes_evento/${evento.imagen_evento}" />

        <form id="miFormulario">
            <select id="select_tipo_invitado">
                <option value="Empresa">Empresa</option>
                <option value="Invitado">Invitado</option>
            </select>
            <input id="input_text" type="text" name="rfc" placeholder="Ingrese su RFC"  required>
            <button type="submit">Obtener invitacion</button>
        </form>
    `;

    // Aquí podrías insertar el contenidoHTML en el DOM, por ejemplo:
    document.body.innerHTML = contenidoHTML;

    // Ahora que el contenido ha sido insertado, agregar el evento
    document.getElementById('select_tipo_invitado').addEventListener('change', function() {
        const seleccion = this.value;
        const input_text = document.getElementById('input_text');
        
        if (seleccion === 'Empresa') {
            input_text.type = 'text';
            input_text.placeholder = 'Ingrese su RFC';
            input_text.name = 'rfc';
            input_text.value = '';
        } else {
            input_text.type = 'email';
            input_text.placeholder = 'Ingrese su correo electronico';
            input_text.name = 'email';
            input_text.value = '';
        }
    });


    // Capturar el evento de envío del formulario
    document.getElementById('miFormulario').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevenir el envío tradicional del formulario

        // Crear un objeto FormData para obtener los datos del formulario
        const datosFormulario = new FormData(this);

        // Convertir FormData a un objeto regular para facilitar su uso
        const datos = Object.fromEntries(datosFormulario.entries());

        // Llamar a la función enviarDatos y pasarle los datos del formulario
        enviarDatos(datos);
    });
}


// Función que recibirá los datos del formulario
function enviarDatos(datos) {
    console.log("Datos del formulario:", datos);
    // Aquí puedes realizar cualquier acción adicional con los datos
}