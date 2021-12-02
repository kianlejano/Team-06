<?php

class Respondent extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getRespondent($respondent_id)
    {
        $query = $this->db->query("SELECT * FROM surveyor WHERE id=", $respondent_id);
        return $query->row();
    }

    public function insertRespondent($username)
    {
        $data = array(
            'username' => $username,
        );

        $this->db->insert('respondent', $data);
    }

    public function editRespondent($respondent_id, $inputChange)
    {
        $this->db->where(array('respondent_id' => $respondent_id));
        $this->db->set("username", $inputChange);
        $this->db->update('respondent');
    }

    public function deleteRespondent($respondent_id)
    {
        $this->db->delete('respondent', array('respondent_id' => $respondent_id));
    }
}
