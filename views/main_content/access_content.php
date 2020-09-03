<?php

    /*  Se verifica si hay o no una sesión para mostrar el contenido respectivo  */
    if($_SESSION['session_active']){

        /*  Contenido con autenticación  */
        echo '
        
            <div class="access__page w80">

                <div class="access__title tac">

                    <h1>Inicio de sesión exitoso</h1>
                
                </div>

                <div class="access__table">
                
                    <table>
                    
                        <tbody>
                        
                            <tr>
                            
                                <td class="pa10"><b>Nombres:</b></td>
                                <td class="pa10">' . ucwords($_SESSION['name']) . '</td>
                            
                            </tr>

                            <tr>
                            
                                <td class="pa10"><b>Usuario:</b></td>
                                <td class="pa10">' . strtolower($_SESSION['user']) . '</td>
                            
                            </tr>

                            <tr>
                            
                                <td class="pa10"><b>Correo:</b></td>
                                <td class="pa10">' . strtolower($_SESSION['email']) . '</td>
                            
                            </tr>
                        
                        </tbody>
                    
                    </table>
                
                </div>
            
            </div>
        
        ';

    }else{

        /*  Si no hay una sesión válida iniciada se redirige al usuario al home  */

        header('Location: ./');

    }
