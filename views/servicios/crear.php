<h1 class="nombre-pagina">Nuevo Servicio</h1>
<p class="descripcion-pagina">Llena todos los campos para añadir un nuevo servicio</p>

<form action="/servicios/crear" method="POST" class="formulario">
    <?php
        include_once __DIR__ . '/formulario.php';
        include_once __DIR__ . '/../templates/alertas.php';
    ?>

    <input type="submit" class="boton" value="Guardar Servicio">
</form>