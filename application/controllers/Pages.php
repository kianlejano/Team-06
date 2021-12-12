
<?php

class Pages extends CI_Controller
{
    public function home()
    {
        $data['title'] = 'TUP Open Stat';
        $this->load->view('templates/header', array('title' => 'TUP Open Statistics'));
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }
}
