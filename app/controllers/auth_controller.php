<?php

class auth_controller extends Controller
{
    public function index()
  {
    $data = [
      "title" => "Login Page",
    ];
    // $this->view('layouts/navbar',$data);
    $this->view('layouts/header',$data);
    $this->view("auth/login_form", $data);
    $this->view('layouts/footer');
  }

  public function login_form()
  {
    $data = [
      "title" => "Login Page",
    ];
    // $this->view('layouts/navbar',$data);
    $this->view('layouts/header',$data);
    $this->view("auth/login_form", $data);
    $this->view('layouts/footer');
  }

  public function register_form(){
    $data = [
        "title" => "Register Page",
      ];
    $this->view('layouts/header',$data);
    $this->view("auth/register_form", $data);
    $this->view('layouts/footer');
  }

  public function register(){

    if ($this->model("User")->register($_POST) > 0) {
        // Set session if success
        Messages::setAuthMessages('berhasil','register','success');
        header("Location: " . BASEURL . "/auth/login_form");
        exit;
      
    }else{
        // Set session if failed
        Messages::setAuthMessages('gagal','register','danger');
        header("Location: " . BASEURL . "/auth/register_form");
        exit;
    }
  }

  public function login(){

    if ($this->model("User")->login($_POST) > 0) {
        // Set session if success
        Messages::setAuthMessages('berhasil','login','success');
        header("Location: " . BASEURL . "/home/index");
        exit;
      
    }else{
        // Set session if failed
        Messages::setAuthMessages('gagal','login','danger');
        header("Location: " . BASEURL . "/auth/login_form");
        exit;
    }
  }

}

?>