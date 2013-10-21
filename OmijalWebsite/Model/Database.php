<?php


    class Database {
        public $user = "root";
        public $host ="localhost";
        public $pass = "";
        public $database ="omijaldb";
        public $connection;
        public $sqlquery="";      
        private $debug=TRUE;
        private static $DBObject=NULL;

        private function __construct() { }

        public static function getInstance() {
            if ( !self::$DBObject instanceof self) {
                self::$DBObject = new self();
            }
            return self::$DBObject;
        }


        public function connect(){
            $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->database);
            if ($this->connection->connect_errno) {
                die('Error de Conexión (' .$this->connection->connect_error . ') ');
            }else $this->message("Conectado");
        }

        public function close(){
            $this->close();
          $this->message("desconectado");

        }

        public function query($sql){
            $this->sqlquery = $sql;
            return $sql;
        }

        public function executeQuery(){
            $this->connection->query($this->sqlquery);
        }

        public function getResult(){
             return $this->connection->query($this->sqlquery);
        }

       
        public function message($text){
            if($this->debug)
            print $text.'<br />';
        }

    }
    
    

?>