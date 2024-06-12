<h1 class="nombre-pagina">Actualizar Servicio</h1>
<p class="descripcion-pagina">Modifica los valores del formulario</p>

<form method="POST" class="formulario">
    <?php
        include_once __DIR__ . '/formulario.php';
        include_once __DIR__ . '/../templates/alertas.php';
    ?>

    <input type="submit" class="boton" value="Actualizar Servicio">
</form>
