
<?php
// este código PHP realiza validaciones básicas en un formulario de registro y redirige 
//al usuario a diferentes páginas dependiendo de los resultados de
    require_once("c://xampp/htdocs/login/controller/homeController.php");
    //require_once("c://xampp/htdocs/login/controller/homeController.php");: Esta línea incluye el archivo "homeController.php" utilizando la función require_once(). Esto significa que el código
    // contenido en ese archivo estará disponible en este archivo.
    $obj = new homeController();
    //$obj = new homeController();: Crea una nueva instancia del controlador de inicio (homeController) llamada $obj. 
    //Esta línea asume que la clase homeController está definida en el archivo "homeController.php".
    $correo = $_POST['correo'];
    $contraseña = $_POST['contraseña'];
    $confirmarContraseña = $_POST['confirmarContraseña'];
    //Estas líneas obtienen los valores de los campos de formulario "correo", "contraseña" y "confirmarContraseña" 
    //enviados a través del método POST y los almacenan en las variables correspondientes.
    $error = "";
    //Inicializa una variable $error vacía. 
    //Esta variable se utilizará para almacenar mensajes de error.
    if(empty($correo) || empty($contraseña) || empty($confirmarContraseña)){
        // Esta condición verifica si alguno de los campos "correo", "contraseña" o "confirmarContraseña" está vacío. Si es así, se concatena un mensaje de error a la variable $error y se redirige al usuario de vuelta a la página "signup.php"
        // junto con el mensaje de error y los valores de los campos para que puedan corregirlos.
        $error .= "<li>Completa los campos</li>";
        header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
    }else if($correo && $contraseña && $confirmarContraseña){
          //Si todos los campos tienen valores (es decir, no están vacíos), 
                //se realiza la siguiente validación.
        if($contraseña == $confirmarContraseña){
            //: Esta condición verifica si la contraseña y la confirmación de contraseña 
            //son iguales. Si es así, se realiza la siguiente validación.
            if($obj->guardarUsuario($correo,$contraseña) == false){
                //Esta línea invoca el método guardarUsuario() del objeto $obj y pasa los valores de $correo y $contraseña como argumentos. Si el método guardarUsuario() devuelve false (es decir, 
                //no pudo guardar al usuario), se concatena un mensaje de error a la variable $error y se redirige al usuario de vuelta a la página "signup.php" junto con el mensaje de error y los valores de los campos.
              
                $error .= "<li>El correo ya esta registrado</li>";
                header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
            }else{
                header("Location:login.php");
            }
            // Si el método guardarUsuario() devuelve true (es decir, el usuario se guarda correctamente), 
            //se redirige al usuario a la página "login.php".
        }else{
            $error .= "<li>Las contraseñas son diferentes</li>";
            header("Location:signup.php?error=".$error."&&correo=".$correo."&&contraseña=".$contraseña."&&confirmarContraseña=".$confirmarContraseña);
        }
        //Si la contraseña y la confirmación de contraseña no son iguales, se concatena un mensaje de error a la variable $error y se redirige al usuario
        // de vuelta a la página "signup.php" junto con el mensaje de error y los valores de los campos.
    }
?>