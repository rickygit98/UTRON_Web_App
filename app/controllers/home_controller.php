<?php

class home_controller extends Controller
{
  public function index()
  {
    $data = [
      "title" => "Home",
    ];

    // Enable this view for template if you want to setting each controller, but don't forget to disable require_once in cores/Controller files

    // $this->view('layouts/header',$data);
    $this->view("home/index", $data);
    // $this->view('layouts/footer');
  }
}

?>
