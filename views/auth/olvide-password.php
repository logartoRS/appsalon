<h1 class="nombre-pagina">Olvide Password</h1>
<p class="descripcion-pagina">Reestablece tu password escribiendo tu email a continuación</p>

<form class="formulario" method="POST" action="/olvide">
    <div class="campo">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" placeholder="Tu E-mail">
    </div>

    <input type="submit" value="Enviar Instrucciones" class="boton">
</form>

<div class="acciones">
    <a href="/">Inicia sesión si ya tienes una cuenta</a>
    <a href="/crear-cuenta">Crear Cuenta</a>
</div>