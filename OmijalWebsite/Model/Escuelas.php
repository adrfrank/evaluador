<?php
    
    class EscuelasManager{
        static function getAll(){
            $db = new Database();
            $db->connect();
            $db->query("select * from escuelas");
            $res = array();
            $qresult = $db->getResult();
            if($qresult && $qresult->num_rows > 0)
            {
                while($esc = $qresult->fetch_assoc())
                    array_push($res, new Escuela($esc));
            }
            return $res;
        }
    }

    class Escuela{
        public $IdEscuela='';
        public $Nombre ='';
        public $Direccion='';
        public function __construct($assocArray){
         $this->IdEscuela = $assocArray["IdEscuela"]   ;
         $this->Nombre = $assocArray["Nombre"];
         $this->Direccion = $assocArray["Direccion"];
        }
    }
?>

