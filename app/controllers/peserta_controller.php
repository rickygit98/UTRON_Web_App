<?php
class peserta_controller extends Controller
{
  public function index()
  {
    $data = [
      "peserta" => $this->model("Peserta")->getAllPeserta(),
    ];
    $this->view("peserta/index", $data);
  }

  public function show($id)
  {
    $data = [
      "peserta" => $this->model("Peserta")->show($id),
    ];
    $this->view("peserta/detail", $data);
  }

  public function add()
  {
    if ($this->model("Peserta")->add($_POST) > 0) {
        // Set session if success
        Messages::setMessages('berhasil','ditambahkan','success');
        header("Location: " . BASEURL . "/peserta");
        exit;
      
    }else{
        // Set session if success
        Messages::setMessages('gagal','ditambahkan','danger');
        header("Location: " . BASEURL . "/peserta");
        exit;
    }
  }
}
?>
