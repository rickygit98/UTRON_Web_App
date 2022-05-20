<?php
class User
{
  private $table = "user";
  private $db;

  public function __construct()
  {
    $this->db = new Database();
  }

  public function getAllUser()
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
    $query = "INSERT INTO user
              VALUES
              ('',:nama,:nik,:alamat,:email,:password)";

    $this->db->query($query);
    $this->db->binding("nama", $data["nama"]);
    $this->db->binding("nik", $data["nik"]);
    $this->db->binding("alamat", $data["alamat"]);
    $this->db->binding("email", $data["email"]);
    $this->db->binding("password", $data["password"]);

    $this->db->execute();

    return $this->db->row_affect();
  }

  public function delete($id){
    $query = "DELETE FROM user WHERE id = :id";

    $this->db->query($query);
    $this->db->binding('id',$id);

    $this->db->execute();
    
    return $this->db->row_affect();
  }
}
?>
