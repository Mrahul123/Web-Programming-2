<?php
class Dosen extends CI_Controller{
    public function index(){
        $this->load->model('dosen_model');
        $dosen = $this->dosen_model->getAll();
        $data['dosen']= $dosen;
        //render data dan kirim data ke view
        $this->load->view('layouts/header');
        $this->load->view('dosen/dosen',$data);
        $this->load->view('layouts/footer');

    }
    public function detail($id){
        $this->load->model('dosen_model');
        $dozen = $this -> dosen_model->getById($id);
        $data ['dozen'] = $dozen;
        $this->load->view('layouts/header');
        $this->load->view('dosen/detail',$data);
        $this->load->view('layouts/footer');
    }
}
?>
