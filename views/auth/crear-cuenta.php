<h1 class="nombre-pagina">Crear cuenta</h1>
<p class="descripcion-pagina">Llena el siguiente formulario para crear una cuenta</p>

<form action="/crear-cuenta" class="formulario" method="POST">
    <div class="campo">
        <label for="nombre">Nombre</label>
        <input 
            type="text"
            id="nombre"
            name="nombre"
            placeholder="Tu nombre"
            value="<?php echo s($usuario -> nombre) ?>"
        />
    </div>
    <div class="campo">
        <label for="apellido">Apellido</label>
        <input 
            type="text"
            id="apellido"
            name="apellido"
            placeholder="Tu apellido"
            value="<?php echo s($usuario -> apellido) ?>"
        />
    </div>
    <div class="campo">
        <label for="telefono">Teléfono</label>
        <input 
            type="tel"
            id="telefono"
            name="telefono"
            placeholder="Tu telefono"
            value="<?php echo s($usuario -> telefono) ?>"
        />
    </div>
    <div class="campo">
        <label for="email">Email</label>
        <input 
            type="email"
            id="email"
            name="email"
            placeholder="Tu email"
            value="<?php echo s($usuario -> email) ?>"
        />
    </div>
    <div class="campo">
        <label for="password">Password</label>
        <input 
            type="password"
            id="password"
            name="password"
            placeholder="Tu password"
        />
    </div>
    <div class="campo">
        <label for="edad">Fecha de nacmiento</label>
        <input 
            type="date"
            id="edad"
            name="edad"
        />
    </div>
    <div class="campo">
        <label>Genero</label>
        <span class="genero">
            <label for="genero">Femenino</label>
            <input 
                type="radio"
                value="femenino"
                id="femenino"
                name="genero"
            />
        </span>
        <span class="genero">
            <label for="genero">Masculino</label>
            <input 
                type="radio"
                value="masculino"
                id="masculino"
                name="genero"
            />
        </span>
        <span class="genero">
            <label for="genero">otro</label>
            <input 
                type="radio"
                value="otro"
                id="otro"
                name="genero"
            />
        </span>
    </div>
    <?php
        include_once __DIR__ . "/../templates/alertas.php";
    ?>
    <input type="submit" value="Crear Cuenta" class="boton">
</form>
<div class="acciones">
    <a href="/">¿Ya tienes una cuenta? Inicia sesión</a>
    <a href="/olvide">¿Olvidaste tu contraseña?</a>
</div>