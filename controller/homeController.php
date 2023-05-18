<?php
//homeController tiene métodos para guardar un nuevo usuario en la base de datos,
// realizar operaciones de limpieza y encriptación de datos, y verificar si un usuario y una contraseña coinciden en la base de datos. Es probable
    class homeController{
        private $MODEL;
        //Esta línea declara una variable privada de instancia llamada $MODEL. Esta variable se utiliza para almacenar una instancia del modelo homeModel en el constructor de la clase.
        public function __construct()
        //Este es el constructor de la clase homeController. Se ejecuta automáticamente cuando se crea un objeto de la clase. En este caso, se requiere el archivo "homeModel.php" 
        //y se crea una instancia de la clase homeModel, que se asigna a la variable $MODEL.
        {
            require_once("c://xampp/htdocs/login/model/homeModel.php");
            $this->MODEL = new homeModel();
        }
        public function guardarUsuario($correo,$contraseña){
            // Este método público guardarUsuario() recibe dos parámetros: $correo y $contraseña. Llama al método agregarNuevoUsuario() del objeto $MODEL y pasa el correo y la contraseña como argumentos 
            //después de realizar algunas operaciones de limpieza y encriptación. Luego, devuelve el valor retornado por el método agregarNuevoUsuario().
            $valor = $this->MODEL->agregarNuevoUsuario($this->limpiarcorreo($correo),$this->encriptarcontraseña($this->limpiarcadena($contraseña)));
            return $valor;
        }
        public function limpiarcadena($campo){
            //Este método público limpiarcadena() recibe un parámetro $campo y realiza una serie de operaciones para limpiar y validar la cadena. Utiliza las funciones strip_tags(), filter_var() y htmlspecialchars() para eliminar etiquetas HTML, filtrar caracteres inseguros y convertir caracteres especiales en entidades HTML. Finalmente, devuelve la cadena limpia.
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_UNSAFE_RAW);
            $campo = htmlspecialchars($campo);
            return $campo;
        }
        public function limpiarcorreo($campo){
            //Al igual que el método limpiarcadena(), realiza operaciones de limpieza y validación específicas para correos electrónicos. 
            $campo = strip_tags($campo);
            $campo = filter_var($campo, FILTER_SANITIZE_EMAIL);
            $campo = htmlspecialchars($campo);
            //FILTER_SANITIZE_EMAIL y htmlspecialchars() para eliminar etiquetas HTML, filtrar y sanitizar el correo electrónico. Luego, devuelve el correo electrónico limpio.
            return $campo;
        }
        public function encriptarcontraseña($contraseña){
            // Este método público encriptarcontraseña() recibe un parámetro $contraseña y utiliza la función password_hash() para encriptar la contraseña utilizando el algoritmo de encriptación predeterminado de PHP. Devuelve la contraseña encriptada.
            return password_hash($contraseña,PASSWORD_DEFAULT);
        }
        public function verificarusuario($correo,$contraseña){
            $keydb = $this->MODEL->obtenerclave($correo);
            return (password_verify($contraseña,$keydb)) ? true : false;
            //password_verify() para comparar la contraseña proporcionada con la clave obtenida de la base de datos. Si coinciden, devuelve true; de lo contrario, devuelve false.
        }
    }

    
?>