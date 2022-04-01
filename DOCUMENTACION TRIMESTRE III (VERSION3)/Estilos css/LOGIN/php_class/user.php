<?php
include "database.php";
class user extends database
{
    private $username;
    private $firstName;
    private $secondName;
    private $firstSurname;
    private $secondSurname;
    private $document_type;
    private $document_number;
    private $email;
    private $phone;
    private $password;

    public function __construct()
    {
        parent::__construct();
        $params = func_get_args();
        $num_params = func_num_args();
        if (method_exists($this,$function = '__construct'.$num_params)) {
            call_user_func_array(array($this,$function),$params);
        }
    }

    function __construct2($username,$password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    function __construct8($names,$surnames,$document_type,$document_number,$email,$phone,$username,$password)
    {
        $this->firstName = $names;
        $this->secondName = null;
        $this->firstSurname = $surnames;
        $this->secondSurname = null;
        $this->document_type = $document_type;
        $this->document_number = $document_number;
        $this->email = $email;
        $this->phone = $phone;
        $this->username = $username;
        $this->password = $password;
    }

    public function separate_names_surnames(){
        if (str_word_count($this->firstName) > 1) {
            list($this->firstName, $this->secondName) = explode(' ', $this->firstName);
        }
        if (str_word_count($this->firstSurname) > 1) {
            list($this->firstSurname,$this->secondSurname ) = explode(' ', $this->firstSurname);
        }
    }

    public function create(){
        $this->separate_names_surnames();
        try {
            $new_user = $this->connection->prepare("INSERT INTO usuario VALUES(:document_number,:firstName,
            :secondName,:firstSurname,:secondSurname,:email,:phone,:document_type_id,:username,:pass,
             2)");
            $new_user->bindParam(':document_number', $this->document_number, PDO::PARAM_INT);
            $new_user->bindParam(':firstName', $this->firstName, PDO::PARAM_STR);
            $new_user->bindParam(':secondName', $this->secondName, PDO::PARAM_STR);
            $new_user->bindParam(':firstSurname', $this->firstSurname, PDO::PARAM_STR);
            $new_user->bindParam(':secondSurname', $this->secondSurname, PDO::PARAM_STR);
            $new_user->bindParam(':email', $this->email, PDO::PARAM_STR);
            $new_user->bindParam(':phone', $this->phone, PDO::PARAM_STR);
            $new_user->bindParam(':document_type_id', $this->document_type, PDO::PARAM_INT);
            $new_user->bindParam(':username', $this->username, PDO::PARAM_STR);
            $new_user->bindParam(':pass', $this->password, PDO::PARAM_STR);
            $new_user->execute();

        }catch (PDOException $e){
            echo "Error al registrarse";
        }
    }

    public function log_in(){
        try{
            $query = $this->connection->prepare("SELECT tipoUsuario FROM usuario WHERE nombreUsuario = :username AND contraseña = :pass");
            $query->bindParam(':username',$this->username);
            $query->bindParam(':pass',$this->password);
            $query->execute();
            $user_type = $query->fetch(PDO::FETCH_COLUMN);
            if(!empty($user_type)){
                session_start();
                $_SESSION['rol'] = $user_type;
                echo json_encode(array('error'=>false,'rol'=>$_SESSION['rol']));
            }else {
                echo json_encode(array('error'=>true));
            }
            $this->disconnect();
        }catch (PDOException $e){

        }
    }

    public static function authenticate(){
        session_start();
        if(!isset($_SESSION['rol'])){
            echo '<script>alert("Inicia sesión"); window.location.href="../LOGIN/index.html"; </script>';
        }
    }

    public static function log_out(){
        @session_start();
        session_destroy();
        header("Location: ../index.html");
    }
}