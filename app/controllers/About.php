<?php 
class About extends Controller{
    public function index($name = 'Human',$job='Rule The World',$age='Infinite'){
        $data = [
            'title'=>'About',
            'name'=> $name,
            'job'=> $job,
            'age'=> $age,
        ];  
        $this->view('about/index',$data);
    }
    public function page(){
        $data = [
            'title'=>'Page',
        ];  
        $this->view('about/page',$data);
    }
}
?>