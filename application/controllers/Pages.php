
<?php

class Pages extends CI_Controller
{
    public function home()
    {

        $data['title'] = 'TUP Open Stat';
        $data['id'] = $this->session->userdata("surveyor_id");
        $data['email'] = $this->session->userdata("email");
        $data['last_name'] = $this->session->userdata("last_name");
        $data['first_name'] = $this->session->userdata("first_name");
        $data['age'] = $this->session->userdata("age");
        $data['birthday'] = $this->session->userdata("birthday");
        $data['gender'] = $this->session->userdata("gender");
        $data['login'] = $this->session->userdata("login");

        // $this->session->sess_destroy();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function register()
    {
        $this->load->view('pages/register.php');
    }

    public function login()
    {
        $username = $this->input->post("loginEmail");
        $password = $this->input->post("loginPassword");

        $result = $this->Surveyor->loginSurveyor($username, $password);
        if ($result) {
            $session_data = array(
                'id' => $result->surveyor_id,
                'email' => $result->email,
                'last_name' => $result->last_name,
                'first_name' => $result->first_name,
                'age' => $result->age,
                'birthday' => $result->birthday,
                'gender' => $result->gender,
                'login' => true
            );

            $this->session->set_userdata($session_data);
            redirect(base_url());
        } else {
            $this->session->set_flashdata('error', 'Invalid username and password');
            redirect(base_url());
        }
    }
}
