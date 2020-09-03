<div class="register__page w80">

    <div class="register__login tac">

        <h1>Registro</h1>

    </div>

    <div class="register__form">

        <form id="register-form" action="./form_register" name="register-form" method="POST" class="w40" autocomplete="off">

            <input class="pa10 ml10 mt10 mr10 capital_letter" type="text" name="name" id="name" placeholder="Nombres" pattern="^[a-zA-ZáéíóúñÁÉÍÓÚÑ\s]+$" title="El campo debe tener un formato válido. Solo letras y espacios en blanco" autofocus required />

            <input class="pa10 ml10 mt10 mr10" type="email" name="email" id="email" placeholder="Correo electrónico" pattern="^[\w\-\.]{3,}@([\w\-]{2,}\.)*([\w\-]{2,}\.)[\w\-]{2,4}$" title="El campo debe tener un correo válido" required />

            <input class="pa10 ml10 mt10 mr10" type="text" name="user" id="user" placeholder="Usuario" maxlength="20" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ_\-]{8,20}$" title="El campo debe tener un formato válido, mínimo 8 y máximo 20 caracteres" required />

            <input class="pa10 ml10 mt10 mr10" type="password" name="pass__one" id="pass__one" placeholder="Contraseña" maxlength="20" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ_\-\*]{8,20}$" title="El campo debe tener un formato válido, mínimo 8 y máximo 20 caracteres" required />

            <input class="pa10 ml10 mt10 mr10" type="password" name="pass__two" id="pass__two" placeholder="Confirmar contraseña" maxlength="20" pattern="^[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ_\-\*]{8,20}$" title="El campo debe tener un formato válido, mínimo 8 y máximo 20 caracteres" required />

            <input class="pa10 ma10 bgOrangeColorPrimary cWhiteColorPrimary noBorder cursor-pointer" type="submit" value="Registrarme" />

            <div class="loader tac ma20 display_none">
                <img src="<?php echo PUBLIC_DIR; ?>img/oval.svg" alt="Enviando formulario..." title="Enviando formulario..." />
            </div>
            
            <p class="messaje_form pa10 ma10 tac display_none"></p>

        </form>


    </div>

</div>