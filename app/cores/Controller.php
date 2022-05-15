<?php

class Controller
{
  public function view($view, $data = [])
  {
    // You can also make header and footer on each controller , but this is if you don't need setting header & footer much.

    require_once "../app/views/layouts/navbar.php";
    require_once "../app/views/layouts/header.php";
    require_once "../app/views/" . $view . ".php";
    require_once "../app/views/layouts/footer.php";
  }

  public function model($model)
  {
    require_once "../app/models/" . $model . ".php";

    return new $model();
  }
}
