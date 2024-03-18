<?php

class Ajax_model extends CI_Model{
    public function createData($data){
        $query = $this->db->insert('person',$data);
        return $query;
    }
}