<?php

class Peoples_model extends CI_Model {

    public function getPeoples($limit, $start) {

        //$this->db->get('namatable', banyakdatayangingindiambil, datadiambildimulaidaridatake...); 
        return $this->db->get('peoples', $limit, $start)->result_array();
    }

    public function countAllPeoples() {
        
        //method num_rows(): untuk menghitung banyak data pada table
        return $this->db->get('peoples')->num_rows();
    }
}