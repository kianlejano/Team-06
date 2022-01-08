<?php

class Surveyor extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getSurveyor($surveyor_id)
    {
        $query = $this->db->query("SELECT * FROM surveyor WHERE id=", $surveyor_id);
        return $query->row();
    }

    public function loginSurveyor($email, $password)
    {
        $this->db->where('email', $email);
        // $this->db->where('password', password_hash($password, PASSWORD_DEFAULT));

        $query = $this->db->get('surveyor');
        if ($query->num_rows() > 0) {
            $result = $query->row();
            if (password_verify($password, $result->password)) {
                return $result;
            }
            return false;
        }
        return false;
    }

    public function validate_email($str)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }

    public function insertSurveyor($email, $last_name, $first_name, $age, $birthday, $gender, $password)
    {

        if ($this->validate_email($email)) {
            $data = array(
                'email' => $email,
                'last_name' => $last_name,
                'first_name' => $first_name,
                'age' => $age,
                'birthday' => $birthday,
                'gender' => $gender,
                'password' => password_hash($password, PASSWORD_DEFAULT)
            );

            $this->db->insert("surveyor", $data);
        } else {
            echo "NOT AN EMAIL";
        }
    }

    public function editSurveyor($surveyor_id, $toChange, $inputChange)
    {
        $this->db->where(array('surveyor_id' => $surveyor_id));
        $this->db->set($toChange, $inputChange);
        $this->db->update('surveyor');
    }

    public function deleteSurveyor($surveyor_id)
    {
        $this->db->delete('surveyor', array('surveyor_id' => $surveyor_id));
    }
}
