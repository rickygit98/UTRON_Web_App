<?php
class About_controller extends Controller
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
    $this->view("about/index", $data);
  }
}
?>
