<?php

class Response extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    public function getResponse($response_id)
    {
        $query = $this->db->query("SELECT * FROM response WHERE response_id=" . $response_id);
        return $query->row();
    }

    public function insertResponse($survey_id, $question_id, $response_id, $answer)
    {
        $data = array(
            'survey_id' => $survey_id,
            'question_id' => $question_id,
            'response_id' => $response_id,
            'answer' => $answer
        );
        $this->db->insert('response', $data);
    }

    public function editResponse($response_id, $toChange, $inputChange)
    {
        $this->db->where(array('responde_id' => $response_id));
        $this->db->set($toChange, $inputChange);
        $this->db->update('response');
    }

    public function deleteResponse($response_id)
    {
        $this->db->delete('response', array('response_id' => $response_id));
    }
}
