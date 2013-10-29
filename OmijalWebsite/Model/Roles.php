<?php
    require_once 'Database.php';
    require_once 'SessionManager.php';

    class RolesManager{
        public static $Admin = 'Administrador';
        public static $Contribuidor = 'Contribuidor';
        public static $participante = 'Participante';
        static function IsInRole($user,$Rol){            
            $db = new Database();
            $db->connect();
            $db->query('select u.* from usuarios u'
                +' inner join usuariosroles ur on u.IdUsuarios = ur.Usuarios_IdUsuarios'
                +' inner join roles r on ur.Roles_IdRol = r.IdRol'
                +' WHERE r.Nombre = \'@rol\' AND u.IdUsuarios = \'@idusuario\'');
            $db->setParameter('@rol', $Rol);
            $db->setParameter('@idusuario',$user->IdUsuario);
            $qresult = $db->getResult();
            var_dump($user);
            $db->close();
            return $qresult && ($qresult->num_rows > 0);
        }
    }
?>

