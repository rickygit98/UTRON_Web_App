<?php
class Mahasiswa
{
  private $table = "mahasiswa";
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAllMahasiswa()
  {
    $this->db->query("SELECT * FROM " . $this->table);
    return $this->db->get();
  }

  public function show($id)
  {
    $this->db->query("SELECT * FROM " . $this->table . " WHERE id = :id");
    $this->db->binding("id", $id);
    return $this->db->first();
  }

  public function add($data)
  {
    $query = "INSERT INTO mahasiswa
              VALUES
              ('',:nama,:nrp,:email,:jurusan)";

    $this->db->query($query);
    $this->db->binding("nama", $data["nama"]);
    $this->db->binding("nrp", $data["nrp"]);
    $this->db->binding("email", $data["email"]);
    $this->db->binding("jurusan", $data["jurusan"]);

    $this->db->execute();

    return $this->db->row_affect();
  }
}
?>
