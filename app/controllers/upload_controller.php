<?php
class upload_controller extends Controller
{
  public function index() {

    $data = [
        "title" => "About Me",
    ];

    $this->view('layouts/navbar',$data);
    $this->view('layouts/header',$data);
    $this->view("upload/index", $data);
    $this->view('layouts/footer');
  }
}
?>
