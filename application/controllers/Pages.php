
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
        $data['css'] = "home.css";

        // $this->session->sess_destroy();
        $this->load->view('templates/header', $data);
        $this->load->view('pages/home');
        $this->load->view('templates/footer');
    }

    public function register()
    {
        $this->load->view('pages/register.php');

        $this->form_validation->set_rules('registerEmail', 'Email address', 'is_unique[surveyor.email]');
        $this->form_validation->set_rules('registerNewPassword', 'New password', 'matches[registerConfirmPassword]');
        $this->form_validation->set_rules('registerConfirmPassword', 'Confirm password', 'required');

        if ($this->form_validation->run() == FALSE) {
            echo "ERROR";
        } else {
            $birthmonth = $this->input->post("registerMonth");
            $birthday = $this->input->post("registerDay");
            $birthyear = $this->input->post("registerYear");
            $birthdate = $birthyear . "-" . $birthmonth . "-" . $birthday;

            $regData['email'] = $this->input->post("registerEmail");
            $regData['first_name'] = $this->input->post("registerName");
            $regData['last_name'] = $this->input->post("registerLastName");
            $regData['birthday'] = $birthdate;
            $regData['gender'] = $this->input->post("registerGender");
            $regData['password'] = $this->input->post("registerComfirmPassword");
            $regData['contact'] = $this->input->post("registerContact");

            $this->Surveyor->insertSurveyor(...$regData);
            $this->email_code = md5((string)date_default_timezone_set('Australia/Melbourne'));
        }
    }

    public function verifyRegister()
    {
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

    public function myaccount()
    {
        $data['css'] = "myaccount/myaccount.css";
        $data['title'] = "My account";
        $this->load->view('templates/header', $data);
    }

    public function editprofile()
    {
        $data['css'] = "myaccount/editprofile.css";
        $data['title'] = "Edit profile";
        $this->load->view('templates/header', $data);
    }

    public function changepassword()
    {
        $data['css'] = "myaccount/changepassword.css";
        $data['title'] = "Change password";
        $this->load->view('templates/header', $data);
    }

    public function createdforms()
    {
        $data['css'] = "myaccount/createdforms.css";
        $data['title'] = "Created forms";
        $this->load->view('templates/header', $data);
    }
}
