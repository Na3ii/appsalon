<h1 class="nombre-pagina">Recuperar Contraseña</h1>
<p class="descripcion-pagina">Escribe tu nueva contraseña a continuación</p>

<?php include_once __DIR__ . '/../templates/alertas.php'; ?>

<?php if($error) return; ?>

<form method="POST" class="formulario">
    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu nueva contraseña"
        />
    </div>
    <input type="submit" class="boton" value="Guardar Nueva Contraseña">
</form>
<div class="acciones">
    
    <a href="/crear-cuenta">¿Aún no tienes una cuenta? Registrate</a>
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
</div>