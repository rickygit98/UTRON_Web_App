<?php 
    class Mahasiswa {
        private $dbh; //databaseHandler
        private $stmt; //statementQuery

        public function __construct()
        {
            $dsn = 'mysql:host=localhost;dbname=utron_db';

            try{
                $this->dbh = new PDO($dsn,'root','');
            }catch(PDOException $e){
                die($e->getMessage());
            }
        }

        public function getAllMahasiswa(){
            $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
            $this->stmt->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC); 
        }
    }
?>