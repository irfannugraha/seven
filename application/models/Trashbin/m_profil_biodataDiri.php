<?php

class m_profil_biodataDiri extends CI_model
{
    public function __construct(){
        $this->load->database();
    }

    public function get_user($id){
        $this->db->where('id_pelanggan',$id);
        $data = $this->db->get('pelanggan');
        return $data->result_array();
    }

    public function get_vendor($id){
        $this->db->where('id_vendor',$id);
        $data = $this->db->get('vendor');
        return $data->result_array();
    }

    public function delete_vendor($idV){
        $this->db->where('id_vendor', $idV);
        $this->db->delete('vendor');
        $data = [
            'id_vendor' => null,
        ];
        $this->db->where('id_vendor', $idV);
        $this->db->update('pelanggan', $data);
    }

    public function update_image($id, $gambar){
        $data = [
            'profile_image' => $gambar,
        ];
        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $data);
    }

    public function update_user_informasiUmum($id){
        $data = [
            "nama" => $this->input->post('nama'),
            "tanggal_lahir" => $this->input->post('tanggal_lahir'),
            "jenis_kelamin" => $this->input->post('jenis_kelamin'),
        ];
        $this->db->where('id_pelanggan',$id);
        $this->db->update('pelanggan', $data);
    }

    public function update_user_emailtelp($id){
        $data = [
            "email" => $this->input->post('email'),
            "no_hp" => $this->input->post('telepon'),
        ];
        $this->db->where('id_pelanggan',$id);
        $this->db->update('pelanggan', $data);
    }

    public function update_user_alamat($id){
        $data = [
            "alamat" => $this->input->post('alamat'),
        ];
        $this->db->where('id_pelanggan',$id);
        $this->db->update('pelanggan', $data);
    }

    public function update_vendor_informasiUmum($id){
        $config['upload_path'] = base_url()."assets/img/pelanggan_pict";
        $config['allowed_types'] = 'jpg|png|jpeg|gif';
        $config['overwrite'] = true;

        $this->load->library('upload', $config);

        // if ($this->upload->do_upload('header_vendor')) {
        //     $gambar = $this->upload->data('file_name');
        // }else {
        //     # code...
        // }
        // print_r($gambar);

        $data = [
            "nama_vendor" => $this->input->post('nama_vendor'),
            "deskripsi_vendor" => $this->input->post('deskripsi_vendor'),
            "hp_vendor" => $this->input->post('telepon_vendor'),
            // "header_vendor" => $gambar,
        ];
        $this->db->where('id_vendor',$id);
        $this->db->update('vendor', $data);
    }
    
    public function update_vendor_emailTelp($id){
        $data = [
            "email_vendor" => $this->input->post('email_vendor'),
            "hp_vendor" => $this->input->post('telepon_vendor'),
        ];
        $this->db->where('id_vendor',$id);
        $this->db->update('vendor', $data);
    }

    public function update_vendor_alamat($id){
        $data = [
            "alamat_vendor" => $this->input->post('alamat_vendor'),
        ];
        $this->db->where('id_vendor',$id);
        $this->db->update('vendor', $data);
    }

    // public function insert_vendor(){
    //     $data = [
    //         "id_vendor" => $this->auto_increment($this->get_LastId('vendor', 'vendor')),
    //     ];
    //     $this->db->insert('vendor', $data);
    // }

    public function update_vendor_status($id){
        $data = [
            "id_vendor" => $this->get_LastId('vendor', 'vendor'),
        ];
        $this->db->where('id_pelanggan', $id);
        $this->db->update('pelanggan', $data);
    }

    public function get_LastId($user, $table){
        $this->db->select('max(id_'.$user.')');
        $data = $this->db->get($table);
        $data = $data->result_array();
        return $data[0]['max(id_'.$user.')'];
    }

    public function auto_increment($lastId){
        $arr = str_split($lastId, 3);
        $arr[1] = sprintf('%03d', ($arr[1] + 1));
        return implode($arr);
    }
}