<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="<?= base_url('imagenes_pagina/icono_titulo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('css/index.css') ?>">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        const url_evento_actual = <?= json_encode($url_evento_actual) ?>;

        const url_consultar_direccion_evento = <?= json_encode(base_url('consultar_direccion_evento')); ?>;
        const url_consultar_existencia_invitado = <?= json_encode(base_url('consultar_existencia_invitado')); ?>;
        const url_consultar_existencia_empresa = <?= json_encode(base_url('consultar_existencia_empresa')); ?>;

        const url_registrar_invitados = <?= json_encode(base_url('vista_registrar_invitados')); ?>;
        const url_registrar_empresas = <?= json_encode(base_url('vista_registrar_empresas')); ?>;

    </script>

    <script src="<?= base_url('javascript/index_evento.js') ?>"></script>
    <?php if ($evento): ?>
            <title><?= html_entity_decode($evento['nombre_evento'], ENT_QUOTES, 'UTF-8')?></title>
        </head>
        <body>
        <script>
            const evento = {
                id: <?= esc($evento['id'], 'js') ?>,
                url_evento: <?= json_encode(esc($evento['url_evento'], 'js')) ?>,
                estatus: <?= json_encode(esc($evento['estatus'], 'js')) ?>,
                fecha: <?= json_encode(date('Y-m-d', strtotime($evento['fecha']))) ?>,  // Formato YYYY-MM-DD
                hora_comienzo: <?= json_encode(date('H:i:s', strtotime($evento['hora_comienzo']))) ?>,  // Formato HH:MM:SS
                hora_final: <?= json_encode(date('H:i:s', strtotime($evento['hora_final']))) ?>,  // Formato HH:MM:SS
                numero_invitados: <?= json_encode(esc($evento['numero_invitados'], 'js')) ?>,
                id_salon: <?= json_encode(esc($evento['id_salon'], 'js')) ?>,
                fecha_programacion: <?= json_encode(esc($evento['fecha_programacion'], 'js')) ?>,
                nombre_evento: <?= json_encode(html_entity_decode($evento['nombre_evento'], ENT_QUOTES, 'UTF-8')) ?>,
                descripcion_evento: <?= json_encode(html_entity_decode($evento['descripcion_evento'], ENT_QUOTES, 'UTF-8')) ?>,
                acceso: <?= json_encode(esc($evento['acceso'], 'js')) ?>,
                imagen_evento: <?= json_encode(esc($evento['imagen_evento'], 'js')) ?>
            };
            crear_formulario_eventos(evento);
        </script>
    <?php else: ?>
        <title>Eventos Camara de comercio de Queretaro</title>
        </head>
        <body>
        <!-- Mostrar un mensaje cuando no se encuentre el evento -->
        <h1>No se encontró el evento.</h1>
    <?php endif; ?>
</body>
</html>