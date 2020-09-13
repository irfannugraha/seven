<?php

class m_admin extends CI_model
{
    public function __construct(){
        $this->load->database();
    }

    public function show_user(){
        $data = $this->db->get('pelanggan');
        $data = $data->result_array();
        for ($i=0; $i < count($data) ; $i++) { 
            if($data[$i]['id_pelanggan']){
                $newId = $data[$i]['id_pelanggan'];

                $this->db->where('id_pelanggan', $newId);
                $bio = $this->db->get('pelanggan');
                $bio = $bio->result_array();
            }elseif ($data[$i]['id_vendor']) {
                $newId = $data[$i]['id_vendor'];

                $this->db->where('id_vendor', $newId);
                $bio = $this->db->get('vendor');
                $bio = $bio->result_array();
            }
            $data[$i]["newId"] = $newId;
            $data[$i]["bio"] = $bio[0];
        }
        return $data;
    }

    public function show_admin($id){
        $this->db->where('id_admin', $id);
        $data = $this->db->get('admin');
        return $data->result_array();
    }

    public function delete_user($id){
        if(str_split($id, 3)[0] == 'PEL'){
            $this->db->where('id_pelanggan', $id);
            $this->db->delete('pelanggan');

            $this->db->where('id_pelanggan', $id);
            $this->db->delete('pelanggan');
        }elseif(str_split($id, 3)[0] == 'VEN'){
            $this->db->where('id_vendor', $id);
            $this->db->delete('pelanggan');

            $this->db->where('id_vendor', $id);
            $this->db->delete('pelanggan');
        }
    }

}