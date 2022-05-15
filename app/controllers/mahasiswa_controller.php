<?php
class Mahasiswa_controller extends Controller
{
  public function index()
  {
    $data = [
      "mahasiswa" => $this->model("Mahasiswa")->getAllMahasiswa(),
    ];
    $this->view("mahasiswa/index", $data);
  }

  public function show($id)
  {
    $data = [
      "mahasiswa" => $this->model("Mahasiswa")->show($id),
    ];
    $this->view("mahasiswa/detail", $data);
  }

  public function add()
  {
    if ($this->model("Mahasiswa")->add($_POST) > 0) {
      header("Location: " . BASEURL . "/mahasiswa");
      exit();
    }
  }
}
?>
