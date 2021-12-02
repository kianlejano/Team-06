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

    public function insertSurveyor($email, $last_name, $first_name, $age, $birthday, $password)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $data = array(
                'email' => $email,
                'last_name' => $last_name,
                'first_name' => $first_name,
                'age' => $age,
                'birthday' => $birthday,
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
