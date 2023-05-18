<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");
    if(!empty($_SESSION['usuario'])){
        //Esta es una estructura de control condicional en PHP. Verifica si la variable de sesión $_SESSION['usuario'] no está vacía.
        header("Location:panel_control.php");
        
    }
?>


<style>
.dog-icon {
    width: 50px;
    height: 50px;
    border: 0px solid red;
    /*preguntele al profe porque no pudo agregar el estilo por medio de la linea 24  */
  }


</style>
<div class="fondo-login">
    <div class="icon">
        <a href="/login/index.php">
            <img src="logo.jpg" alt="Dog Icon" class="dog-icon">
        </a>
    </div>
    <div class="titulo">
        Inicia sesion en BRANDON.COM
    </div>
    <form action="verificar.php" method="POST" class="col-3 login" autocomplete="off">
         <!--: Esta línea de código define un formulario HTML. El atributo action especifica el archivo al que se enviarán los datos del formulario cuando se envíe. El atributo method especifica el 
         método HTTP utilizado para enviar los datos del formulario, en este caso, "POST". La clase CSS "col-3 login" se utiliza para aplicar estilos al formulario. El atributo autocomplete se establece en "off" para evitar que el navegador autocomplete los campos del formulario. -->
        <div class="mb-3">
             <!--: contienen los campos del formulario. Cada campo tiene una etiqueta <label> que describe el campo y un <input> que permite al usuario ingresar datos. Los atributos name se utilizan para identificar los campos cuando se envían los datos del formulario. -->
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" name="correo" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Contraseña</label>
            <div class="box-eye">
                <button type="button" onclick="mostrarContraseña('password','eyepassword')">
                    <i id="eyepassword" class="fa-solid fa-eye changePassword"></i>
                </button>
            </div>
            <input type="password" name="contraseña" class="form-control" id="password">
        </div>
        <?php if(!empty($_GET['error'])):?>
             <!--:Esta es una estructura de control condicional en PHP. Verifica si la variable $_GET['error'] no está vacía. Si no está vacía, se muestra un bloque <div> con la clase "alert alert-danger" que muestra un mensaje de error. El contenido del mensaje de error se toma de $_GET['error'].  -->
            
            <div id="alertError" style="margin: auto;" class="alert alert-danger mb-2" role="alert">
                <?= !empty($_GET['error']) ? $_GET['error'] : ""?>
            </div>
        <?php endif;?>
        <div class="d-grid gap-2">
            <!--: contiene un botón de envío del formulario con la clase "btn btn-primary". Cuando se hace clic en el botón, se enviarán los datos del formulario. -->
        
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>
    <div class="login col-3 mt-3">
        Nuevo en la pagina de brandon? <a href="signup.php" style="text-decoration: none;">Crear una cuenta</a>
    </div>
</div>

<?php
    require_once("c://xampp/htdocs/login/view/head/footer.php");
?>