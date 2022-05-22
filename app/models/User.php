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
    $query = "INSERT INTO " . $this->table . " VALUES
              ('',:nama,:nik,:jk,:tgl_lahir,:alamat,:no_telp)";

    $this->db->query($query);
    $this->db->binding("nama", $data["nama"]);
    $this->db->binding("nik", $data["nik"]);
    $this->db->binding("jk", $data["jk"]);
    $this->db->binding("tgl_lahir", $data["tgl_lahir"]);
    $this->db->binding("alamat", $data["alamat"]);
    $this->db->binding("no_telp", $data["no_telp"]);

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

  public function update($data)
  {
    $query = "UPDATE user SET
              nama = :nama,
              nik = :nik,
              jenis_kelamin = :jk,
              tgl_lahir = :tgl_lahir,
              alamat = :alamat,
              no_telp = :no_telp
              WHERE id=:id";

    $this->db->query($query);
    $this->db->binding("nama", $data["nama"]);
    $this->db->binding("nik", $data["nik"]);
    $this->db->binding("jk", $data["jk"]);
    $this->db->binding("tgl_lahir", $data["tgl_lahir"]);
    $this->db->binding("alamat", $data["alamat"]);
    $this->db->binding("no_telp", $data["no_telp"]);
    $this->db->binding("id", $data["id"]);

    $this->db->execute();

    return $this->db->row_affect();
  }

  public function search(){
    $keyword = $_POST['keyword'];
    $query = "SELECT * FROM user WHERE nama LIKE :keyword";

    $this->db->query($query);
    $this->db->binding('keyword',"%$keyword%");

    return $this->db->get();
  }
}
?>
