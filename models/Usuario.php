<?php
namespace Model;

class Usuario extends ActiveRecord {
    //Base de datos
    protected static $tabla = 'usuarios';
    protected static $columnasDB = ['id', 'nombre', 'apellido', 'email', 
    'password', 'telefono', 'edad', 'genero', 'admin', 'creado', 
    'confirmado', 'token'];

    public $id;
    public $nombre;
    public $apellido;
    public $email;
    public $password;
    public $telefono;
    public $edad;
    public $genero;
    public $admin;
    public $creado;
    public $confirmado;
    public $token;

    public function __construct($args = []) {
        $this -> id = $args['id'] ?? null;
        $this -> nombre = $args['nombre'] ?? '';
        $this -> apellido = $args['apellido'] ?? '';
        $this -> email = $args['email'] ?? '';
        $this -> password = $args['password'] ?? '';
        $this -> telefono = $args['telefono'] ?? '';
        $this -> edad = $args['edad'] ?? '';
        $this -> genero = $args['genero'] ?? '';
        $this -> admin = $args['admin'] ?? 0;
        $this -> creado = date ('Y/m/d');
        $this -> confirmado = $args['confirmado'] ?? 0;
        $this -> token = $args['token'] ?? '';
    }

    //mensajes de validacion para la creacion de una cuenta
    public function validarNuevaCuenta() {
        if(!$this -> nombre) {
            self :: $alertas ['error'][] = 'El nombre es Obligatorio';
        }
        if(!$this -> apellido) {
            self :: $alertas ['error'][] = 'El apellido es Obligatorio';
        }
        if(!$this -> email) {
            self :: $alertas ['error'][] = 'El email es obligatorio';
        }
        if(!$this -> password) {
            self :: $alertas ['error'][] = 'La contraseña es obligatoria';
        }
        if(strlen($this -> password) < 6) {
            self :: $alertas ['error'][] = 'La contraseña debe contener al menos 6 caracteres';
        }
        if(!$this -> edad) {
            self :: $alertas ['error'][] = 'debe ingresar la fecha de nacimiento';
        }
        if(!$this -> genero) {
            self :: $alertas ['error'][] = 'debe elegir un genero';
        }
        return self :: $alertas;
    }

    public function validarLogin () {
        if(!$this -> email) {
            self :: $alertas['error'][] = 'el email es obligatorio';
        }
        if(!$this -> password) {
            self :: $alertas['error'][] = 'el password es obligatorio';
        }
        return self :: $alertas;
    }

    public function validarEmail () {
        if(!$this -> email) {
            self :: $alertas['error'][] = 'el email es obligatorio';
        }
        return self :: $alertas;
    }

    public function validarPassword () {
        if(!$this -> password) {
            self :: $alertas ['error'][] = 'la contraseña es obligatoria';
        }
        if(strlen($this -> password) < 6) {
            self :: $alertas ['error'][] = 'la contraseña debe tener al menos 6 caracteres';
        }
        return self :: $alertas;
    }
    public function existeUsuario() {
        $query = " SELECT * FROM " . self :: $tabla ." WHERE email = '" . $this -> email . "' LIMIT 1";
    
        $resultado = self :: $db -> query($query);

        if($resultado ->num_rows) {
            self :: $alertas['error'][] = 'El usuario ya esta registrado';
        }
        return $resultado;
    }

    public function hashPassword() {
        $this -> password = password_hash($this -> password, PASSWORD_BCRYPT);
    }

    public function crearToken() {
        $this -> token = uniqid();
    }

    public function comprobarPasswordAndVerificado ($password) {
        $resultado = password_verify($password, $this -> password);

        if(!$resultado || !$this -> confirmado) {
            self :: $alertas['error'][] = 'Password Incorrecto o tu cuenta no ha sido confirmada';
        } else {
        return true;
        }
    }
    
}