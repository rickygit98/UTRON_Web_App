<?php
class about_controller extends Controller
{
  public function index(
    $name = "Ricky",
    $job = "Student",
    $university = "Widya Kartika University",
    $department = "Informatics Engineering"
  ) {
    $data = [
      "title" => "About Me",
      "name" => $name,
      "job" => $job,
      "university" => $university,
      "department" => $department,
    ];

    $this->view('layouts/navbar',$data);
    $this->view('layouts/header',$data);
    $this->view("about/index", $data);
    $this->view('layouts/footer');
  }
}
?>
