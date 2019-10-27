<?php
    function code($lenght) {
        if (function_exists("random_bytes")) {
            $bytes = random_bytes(ceil($lenght / 2));
        } elseif (function_exists("openssl_random_pseudo_bytes")) {
            $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
        } else {
            throw new Exception("no cryptographically secure random function available");
        }
        return substr(bin2hex($bytes), 0, $lenght);
    }

    class user
    {
        private $errors=array();
        private $nombre="",$apellido="",$carnet="",$usuario="",$correo="",$pass="",$rpass="",$slack="",$foto="";

        public function __construct(){
            //Código aquí
        }

        public function register($nombre,$apellido,$carnet,$usuario,$correo,$pass,$rpass,$slack,$foto){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->carnet = $carnet;
            $this->usuario = $usuario;
            $this->correo = $correo;
            $this->pass = $pass;
            $this->rpass = $rpass;
            $this->slack = $slack;
            $this->foto = $foto;

            if($this->nombre == ""){
                array_push($this->errors,"Debes escribir tus nombres");
            }
            if($this->apellido == ""){
                array_push($this->errors,"Necesitamos saber tu apellido");
            }
            if($this->carnet == ""){
                array_push($this->errors,"El carnet te hace unic@, escríbelo");
            }
            if($this->usuario == ""){
                array_push($this->errors,"El usuario facilitará tus inicios de sesión");
            }
            if(strpos($this->correo,"@") == "" || $this->correo == ""){
                array_push($this->errors,"El correo sirve para enviarte alertas");
            }
            if($this->pass == "" || $this->rpass == ""){
                if($this->pass != $this->rpass){
                    array_push($this->errors,"Parece que las contraseñas no coinciden, vuelve a intentarlo");
                } else {
                    array_push($this->errors,"No has llenado uno o ninguno de los campos de contraseña");
                }
            }

            if(count($this->errors) == 0){
                $code = code(12);
                $token = code(20);
                $time = date("Y-m-d H:i:s");
                $this->pass = password_hash($pass,PASSWORD_ARGON2I);

                if ($this->foto['name']) {
                    $name = $this->foto['name'];
                    $temp = $this->foto['tmp_name'];
                    $ext = new SplFileInfo($name);
                    $type = $ext -> getExtension();
                    $size = $this->foto['size'];
    
                    $target_path  = 'files/'.$code.$name;
    
                    if (!move_uploaded_file($temp, $target_path)) {
                        return "Error al cargar archivo";
                    }
                }

                $conx = new mysqli('localhost','root','','virtuallearning');
                $conx->query("INSERT INTO users(usuario_id,nombre,apellido,correo,pass,usuario,carnet,foto,slack,inicio,token,rol,estado) VALUES('$code','$this->nombre','$this->apellido','$this->correo','$this->pass','$this->usuario','$this->carnet','$target_path','$this->slack','$time','$token',4,1)");

                session_start();
                $_SESSION['usuario_id'] = $code;
                $_SESSION['rol'] = 4;
                $_SESSION['preview'] = $ar['rol'];

                header('location:./');
            }

        }

        public function login($usuario,$pass){
            include 'conexion.php';

            $this->usuario = $usuario;
            $this->pass = $pass;

            $sql = $conx->query("SELECT * FROM users WHERE usuario='$this->usuario'");
            $ar = $sql->fetch_array();

            if(!$ar['usuario_id']){
                array_push($this->errors,"No existe el usuario al que usted quiere ingresar");
            } else {
                if(password_verify($this->pass,$ar['pass'])){
                    session_start();
                    $_SESSION['usuario_id'] = $ar['usuario_id'];
                    $_SESSION['rol'] = $ar['rol'];
                    $_SESSION['preview'] = $ar['rol'];

                    if($ar['rol'] == 1){
                        header('location:admin.php');
                    } else {
                        header('location:dashboard.php');
                    }
                } else {
                    array_push($this->errors,"Los datos ingresados no coinciden");
                }
            }
            
        }

        public function getErrors(){

            return $this->errors;

        }
    };

?>