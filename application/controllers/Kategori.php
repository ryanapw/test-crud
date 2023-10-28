<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori extends CI_Controller {
    public function index()
	{
		$this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
		$data = array(
            'kategori' => $kategori,
            'title' =>"Halaman Kateopri"
        );
		$this->template->load('template','kategori_input',$data);
	}
    public function simpan(){
        $this->db->from('kategori');
        $this->db->where('nama_kategori',$this->input->post('nama_kategori'));
        $data = $this->db->get()->result_array();
        if($data<>NULL){
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
							Kategori Konten Sudah Digunakan
						</div>');
        redirect('kategori');
        }
		$data = array(
			'nama_kategori'   => $this->input->post('nama_kategori')
		);
        $this->db->insert('kategori',$data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
							Kategori Berhasil Ditambahkan
						</div>');
		redirect('kategori');
	}
	public function hapus($id){
        $where = array('id_kategori' => $id);
        $this->db->Delete('kategori', $where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
        Kategori Berhasil Dihapus
        </div>');
        redirect('kategori');
    }
	public function edit($id){
        $this->db->select('*')->from('kategori');
        $this->db->where('id_kategori', $id);
        $kategori = $this->db->get()->result_array();
        $data = array(
            'kategori' => $kategori,
            'title' =>"Perbarui Kategori"
        );
        $this->template->load('template','kategori_edit', $data);
    }
	public function update(){
        $where = array(
            'id_kategori' => $this->input->post('id_kategori')
        );
        $data = array(
            'nama_kategori'    => $this->input->post('nama_kategori')
        );
        $this->db->update('kategori',$data,$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
        Kategori Berhasil Di Edit
        </div>');
        redirect('kategori');
    }
}