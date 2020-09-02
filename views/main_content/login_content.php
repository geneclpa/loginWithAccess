<div class="login__page w80">

    <div class="login__title tac">

        <h1>Login</h1>

    </div>

    <div class="login__form">

        <form id="login-form" action="" name="login-form" method="POST" class="w40" autocomplete="off">

            <input class="pa10 ma10" type="text" name="user" id="user" placeholder="Usuario" maxlength="20" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ_-]{8,20}$" title="El campo debe tener un formato válido, mínimo 8 y máximo 20 caracteres" required autofocus />

            <input class="pa10 ma10" type="password" name="pass" id="pass" placeholder="Contraseña" maxlength="20" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ_-*]{8,20}$" title="El campo debe tener un formato válido, mínimo 8 y máximo 20 caracteres" required />

            <input class="pa10 ma10 bgRedColorPrimary cWhiteColorPrimary noBorder cursor-pointer" type="submit" value="Iniciar sesión" />

        </form>

    </div>

</div>