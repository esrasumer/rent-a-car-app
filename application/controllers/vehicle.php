<?php
class vehicle extends CI_Controller {
    //araçlarla ilgili listeleme işlemi yapılacak
    //toplu listeleme ve seçilen araç listeleme yapılacak
    public function index()
    {
        $this->load->model('araclar_model');
        $liste = new stdClass();
        $liste->araclar=$this->araclar_model->GetAll();
        $this->load->view('vehicle_index2_view',$liste);
    }

    public function detail($id)
    {
        $this->load->model('araclar_model');
        $veriler['arac']=$this->araclar_model->Get($id);
        $this->load->view('vehicle_detail_view',$veriler);
    }
}
?>