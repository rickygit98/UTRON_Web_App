<?php
class user_controller extends Controller
{
  public function index()
  {
    $data = [
      "user" => $this->model("User")->getAlluser(),
    ];
    $this->view("user/index", $data);
  }

  public function show($id)
  {
    $data = [
      "user" => $this->model("User")->show($id),
    ];
    $this->view("user/detail", $data);
  }

  public function add()
  {
    if ($this->model("User")->add($_POST) > 0) {
        // Set session if success
        Messages::setMessages('berhasil','ditambahkan','success');
        header("Location: " . BASEURL . "/user");
        exit;
      
    }else{
        // Set session if success
        Messages::setMessages('gagal','ditambahkan','danger');
        header("Location: " . BASEURL . "/user");
        exit;
    }
  }

  public function delete($id)
  {
    if ($this->model("User")->delete($id) > 0) {
        // Set session if success
        Messages::setMessages('berhasil','dihapus','success');
        header("Location: " . BASEURL . "/user");
        exit;
      
    }else{
        // Set session if success
        Messages::setMessages('gagal','dihapus','danger');
        header("Location: " . BASEURL . "/user");
        exit;
    }
  }

  public function fillForm(){
   echo json_encode($this->model('User')->show($_POST['id']));
  }

  public function update(){
    if ($this->model("User")->update($_POST) > 0) {
      // Set session if success
      Messages::setMessages('berhasil','diubah','success');
      header("Location: " . BASEURL . "/user");
      exit;
    
  }else{
      // Set session if success
      Messages::setMessages('gagal','diubah','danger');
      header("Location: " . BASEURL . "/user");
      exit;
  }
  }
}
?>
