<h1 class="nombre-pagina">Olvide la Contraseña</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu
    email a continuación</p>

<form action="/olvide" method="POST" class="formulario">
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu email"
        />
    </div>
   
    <?php include_once __DIR__ . '/../templates/alertas.php'; ?>

    <input type="submit" class="boton" value="enviar">
</form>

<div class="acciones">
    
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Registrate</a>
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
</div>