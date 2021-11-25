<?php

    class Form extends CI_Model{

        public function __construct(){
            $this->load->database();
        }

        public function getForm($form_id){
            $query = $this->db->query("SELECT * FROM form WHERE form_id=".$form_id);
            return $query->row();
        }

        public function insertForm($survey_id, $form_order, $name){
            $insert = array($survey_id, $form_order, $name);
            $this->db->insert('form', $insert);
        }

        public function editForm($form_id, $toChange, $inputChange){
           $this->db->where(array('form_id'=> $form_id));
           $this->db->set($toChange, $inputChange);
           $this->db->update('form');
        }

        public function deleteForm($form_id){
            $this->db->delete('form', array('form_id'=>$form_id));
        }
    }