<?php 
    class Mahasiswa {
        private $table = 'mahasiswa';
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getAllMahasiswa(){
            $this->db->query('SELECT * FROM '.$this->table);
            return $this->db->get();
        }

        public function show($id){
            $this->db->query('SELECT * FROM '.$this->table.' WHERE id = :id');
            $this->db->binding('id',$id);
            return $this->db->first();
        }
    }
?>