<?php
//esta clase homeModel se utiliza para realizar consultas a la base de datos relacionadas con usuarios, como agregar un nuevo usuario y obtener la contraseña correspondiente a un correo electrónico específico. 
//Utiliza la clase PDO para interactuar con la base de datos y realizar operaciones SQL seguras.
    class homeModel{
        private $PDO;
        //Esta línea declara una variable privada de instancia llamada $PDO. Esta variable se utiliza para almacenar una instancia de la clase PDO que representa la conexión a la base de datos.
        public function __construct()
        //Este es el constructor de la clase homeModel. Se ejecuta automáticamente cuando se crea un objeto de la clase. En este caso, se requiere el archivo "db.php" que probablemente contiene la configuración de la base de datos y se crea una instancia de la clase db. Luego, 
        //se establece la conexión a la base de datos asignando el resultado de llamar al método conexion() de la instancia de db a la variable $PDO.
        {
            require_once("c://xampp/htdocs/login/config/db.php");
            $pdo = new db();
            $this->PDO = $pdo->conexion();
        }
        public function agregarNuevoUsuario($correo,$password){
            //Este método público agregarNuevoUsuario() recibe dos parámetros: $correo y $password. Prepara una consulta SQL utilizando el método prepare() 
            //de la instancia de $PDO y luego vincula los parámetros :correo y :password con los valores proporcionados. Intenta ejecutar la consulta utilizando 
            //el método execute() y devuelve true si la ejecución tiene éxito. En caso de excepción, devuelve false.
            $statement = $this->PDO->prepare("INSERT INTO usuarios values(null,:correo, :password)");
            //para preparar una consulta SQL de inserción. La consulta SQL especifica que se insertarán valores en la tabla "usuarios". 
            $statement->bindParam(":correo",$correo);
            $statement->bindParam(":password",$password);
            try {
                // Esta línea marca el comienzo del bloque try, donde se colocan las operaciones que podrían generar una excepción.
                $statement->execute();
                //Cuando se llama al método execute(), la consulta preparada se envía al servidor de la base de datos para su ejecución.
                return true;
            } catch (PDOException $e) {
                return false;
                //Si se produce algún error durante la ejecución de la consulta, el método execute() devuelve false.
            }
        }
        public function obtenerclave($correo){
            //Este método público obtenerclave() recibe un parámetro $correo. Prepara una consulta SQL para seleccionar la columna de contraseña (password) de la tabla 
            //usuarios donde el correo coincide con el valor proporcionado. Luego, vincula el parámetro :correo con el valor proporcionado. Ejecuta la consulta utilizando el 
            //método execute() y devuelve la contraseña obtenida mediante el método fetch(). Si la ejecución tiene éxito, devuelve la contraseña; de lo contrario, devuelve false.
            $statement = $this->PDO->prepare("SELECT password FROM usuarios WHERE correo = :correo");
            //esto significa que cuando la consulta se ejecute, el valor de $password se asignará al marcador de posición :password.


            $statement->bindParam(":correo",$correo);
            //La función bindParam() se utiliza para evitar inyecciones de SQL y permite la asignación segura de valores a los marcadores de posición en la consulta preparada.
            //Después de ejecutar estas líneas de código, el objeto $statement estará preparado para ejecutar la consulta con los valores proporcionados para $correo y $password.

            return ($statement->execute()) ? $statement->fetch()['password'] : false;
            //esta línea de código intenta ejecutar la consulta preparada y obtener el valor del campo "password" de la fila de resultados si la ejecución tiene éxito. 
            //Si la ejecución falla o se produce algún error, se devuelve false.
        }
    }

?>