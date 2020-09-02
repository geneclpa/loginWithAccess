<div class="w100 dFlex-jcCenter-aiCenter bgRedColorPrimary">

    <div class="w50 tac cYellowColorPrimary">
    
        <h1 class="logo cursor-pointer">LoginWhitAccess</h1>
    
    </div>

    <div class="w50 tar mr20">

        <?php

            /*  Si no se ha iniciado sesión se muestra el menú correspondiente  */
            if(!$_SESSION['session_active']){
    
                echo '

                    <a href="./" class="links nounder cWhiteColorPrimary">Home</a>
                    <span class="pr20 pl20 cWhiteColorPrimary">|</span>
                    <a href="./login" class="links nounder cWhiteColorPrimary">Login</a>
                    <span class="pr20 pl20 cWhiteColorPrimary">|</span>
                    <a href="./register" class="links nounder cWhiteColorPrimary">Registro</a>

                ';

            }else{

                echo '

                    <a href="./close" class="links nounder cWhiteColorPrimary">Salir</a>

                ';

            }

        ?>
    
    </div>

</div>