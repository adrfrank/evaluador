<?php
    require_once 'Database.php';
    require_once 'SessionManager.php';

    class UsuariosManager {
        static function Autenticate($user, $pass){
             $db =  new Database();
             $db->connect();   
             $db->query('SELECT IdUsuarios, Nombre, Password, Email FROM usuarios WHERE Nombre = \'@nombre\' and Password = \'@pass\'')     ;
             $db->setParameter('@nombre',$user);
             $db->setParameter('@pass', $pass);
             $qresult = $db->getResult();             if($qresult->num_rows > 0){
                $user =  new Usuario($qresult->fetch_assoc());
                SessionManager::setUser($user);
                return TRUE;
            }            
            $db->close();
            return FALSE;
        }
    }

    class Usuario{
        public $IdUsuario = '';
        public $Nombre = '';
        public $Password = '';
        public $Email = '';

        function __Construct($assocArray){
            $this->IdUsuario =  $assocArray['IdUsuarios']   ;
            $this->Nombre = $assocArray['Nombre'];
            $this->Password = $assocArray['Password'];
            $this->Email = $assocArray['Email'];
        }
    }
?>


