<?php
require_once './controller/changeLanguaje.php';
include_once './controller/loginUser.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home</title>
        <meta charset="utf-8">
        <meta name = "format-detection" content = "telefono venezuela arreglo celulares portatiles" />
        <link rel="stylesheet" href="static/css/grid.css">
        <link rel="stylesheet" href="static/css/style.css">
        <link rel="stylesheet" href="static/css/login.css">
    </head>

    <body style="background: #ffffff">


        <!--- Content-->
        <section class="container_section">    
            <article id="main" class="container_login">

                <div class="modal-content sub_container_login" >

                    <form action="" method="post" name="loginUser" id="loginUser" accept-charset="utf-8" class="formLogin">
                        <h2 class="title_login">Login</h2>
                        <div class="modal-body">
                            <p style="color: #000000; margin-bottom: 10px"><?php echo $user_login; ?></p>
                            <input type="text"required="required" id="username" name="username" class="input_login" placeholder="Usuario"/>	
                            <p style="color: #000000; margin-bottom: 10px"><?php echo $pass_login; ?></p>
                            <input type="password" required="required" id="password" name="password" class="input_login" placeholder="Clave"/>
                            <p class="msj_error"><?php echo $msjError ?></p>	  	
                        </div>
                        <div id="footer-modal container_button_login">
                            <button type="button" class="buttonLimpiar" name="limpiarBtn" value="Limpiar" id="limpiarBtn">Limpiar</button>
                            <button type="submit" name="btnLogin" id="btnLogin" class="buttonRegister"><span>Login </span></button>
                        </div>
                    </form>
                </div>
            </article>
        </section>


        <script src="static/js/jquery.js"></script>
        <script src="static/js/global.js"></script>
        <script src="static/js/login.js"></script>
    </body>
</html>