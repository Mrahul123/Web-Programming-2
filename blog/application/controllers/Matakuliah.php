<?php
class Matakuliah extends CI_Controller{
    public function index(){
        $this->load->model('matakuliah_model');
        $matakuliah= $this->matakuliah_model->getAll();
        $data['matakuliah']= $matakuliah;
        //render data dan kirim data ke view
        $this->load->view('layouts/header');
        $this->load->view('matakuliah/matakuliah',$data);
        $this->load->view('layouts/footer');

    }
    
}

?>