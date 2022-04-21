<?php
class blog extends CI_Controller{
    public function index(){
        $data ['nama'] = "Code Igniter 3";
        $this ->load->view("blog/index",$data);

    }
    public function add(){
        $this ->load->view("blog/add");
    }
}
?>
