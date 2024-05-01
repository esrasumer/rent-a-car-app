<?php

class home extends CI_Controller {
    
    //işlev, metot, action
    public function index()
    {
        $this->load->view('home_index_view');
    } 

    public function contact()
    {
        $this->load->view('home_contact_view');
    }
}

?>