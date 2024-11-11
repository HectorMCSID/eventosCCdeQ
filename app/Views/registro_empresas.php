<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="icon" href="<?= base_url('imagenes_pagina/icono_titulo.png') ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?= base_url('css/registro_empresas.css') ?>">
   
            <title>empresa</title>
        </head>
        <body>
        <form>
    <div class="input_div">
        <div class="input_item">
            <p>RFC:</p>
            <input type="text" value="<?= esc($id)?>">
        </div>

        <div class="input_item">
            <p>nombre comercial:</p>
            <input type="text">
        </div>
    </div>

    <div class="input_div">
        <div class="input_item">
            <p>razon social:</p>
            <input type="text">
        </div>

        <div class="input_item">
            <p>direccion comercial:</p>
            <input type="text">
        </div>
    </div>

    <div class="input_div">
        <div class="input_item">
            <p>direccion fiscal:</p>
            <input type="text">
        </div>

        <div class="input_item">
            <p>venden:</p>
            <input type="text">
        </div>
    </div>

    <div class="input_div">
        <div class="input_item">
            <p>aniversario:</p>
            <input type="text">
        </div>

        <div class="input_item">
            <p>telefono oficina:</p>
            <input type="text">
        </div>
    </div>

    <div class="input_div">
        <div class="input_item">
            <p>numero de afiliacion:</p>
            <input type="text">
        </div>

        <div class="input_item">
            <p>comprobante de afiliacion:</p>
            <input type="text">
        </div>
    </div>

    <div class="input_div">
        <div class="input_item">
            <p>descripcion de productos:</p>
            <input type="text">
        </div>

        <div class="input_item">
            <p>descripcion de empresas:</p>
            <input type="text">
        </div>
    </div>

    <div class="input_div">
        <div class="input_item">
            <p>nombre:</p>
            <input type="text">
        </div>

        <div class="input_item">
            <p>correo:</p>
            <input type="text">
        </div>
    </div>

    <div class="input_div">
        <div class="input_item">
            <p>tipo:</p>
            <input type="text">
        </div>
    </div>
</form>

</body>
</html>