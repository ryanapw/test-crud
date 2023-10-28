<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konten extends CI_Controller {
    public function index()
	{
		$this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();

        $this->db->select('*')->from('konten a');
        $this->db->join('kategori b','a.id_kategori=b.id_kategori','left');
        $this->db->join('kategori c','a.id_kategori=c.id_kategori','left');
		$this->db->order_by('tanggal','DESC');
		$konten = $this->db->get()->result_array();
		$data = array(
            'title' =>"Halaman Mobil",
            'kategori' => $kategori,
            'konten' => $konten

    );
		$this->template->load('template','konten_input',$data);
	}
    public function simpan(){
        $namafoto = date('YmdHis').'.jpg';
        $config['upload_path']          = 'assets/upload/mobil/';
        $config['max_size'] = 5*1024 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']        = '*';
        $config['file_name']            = $namafoto;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 5*1024 * 1024){
            $this->session->set_flashdata('alert', '
                <div class="alert alert-primary" role="alert">
							Ukuran Foto Terlalu Besar
						</div>
                    ');
            redirect('konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
        $this->db->from('konten');
        $this->db->where('judul',$this->input->post('judul'));
        $data = $this->db->get()->result_array();
        if($data<>NULL){
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
							Nama Sudah Digunakan
						</div>');
        redirect('konten');
        }
		$data = array(
			'judul'   => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'keterangan'   => $this->input->post('keterangan'),
            'tanggal'   => date('Y-m-d'),
            'foto'   => $namafoto,
            'slug'   => str_replace(' ','-',$this->input->post('judul')),
		);
        $this->db->insert('konten',$data);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
							Berhasil Menambahkan Mobil
						</div>');
		redirect('konten');
	}
    public function update(){
        $namafoto = $this->input->post('nama_foto');
        $config['upload_path']          = 'assets/upload/mobil/';
        $config['max_size'] = 50*1024 * 1024; //3 * 1024 * 1024; //3Mb; 0=unlimited
        $config['allowed_types']        = '*';
        $config['file_name']            = $namafoto;
        $config['overwrite']            = TRUE;
        $this->load->library('upload', $config);
        if($_FILES['foto']['size'] >= 50*1024 * 1024){
            $this->session->set_flashdata('alert', '
            <div class="alert alert-primary" role="alert">
            Ukuran Foto Terlalu Besar
        </div>
                    ');
            redirect('konten');  
        }  elseif( ! $this->upload->do_upload('foto')){
            $error = array('error' => $this->upload->display_errors());
        }else{
            $data = array('upload_data' => $this->upload->data());
        }   
		$data = array(
			'judul'   => $this->input->post('judul'),
            'id_kategori'   => $this->input->post('id_kategori'),
            'keterangan'   => $this->input->post('keterangan'),
            'slug'   => str_replace(' ','-',$this->input->post('judul')),
		);
        $where = array(
            'foto' => $this->input->post('nama_foto')
        );
        $this->db->update('konten',$data,$where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
							Mobil Telah Diperbarui
						</div>');
		redirect('konten');
	}
	public function delete_data($id){
        $filename=FCPATH.'/assets/upload/mobil/'.$id;
            if (file_exists($filename)){
                unlink("./assets/upload/mobil/".$id);
            }
        $where = array('foto' => $id);
        $this->db->Delete('konten', $where);
        $this->session->set_flashdata('alert','
        <div class="alert alert-primary" role="alert">
							Mobil Berhasil Dihapus
						</div>');
        redirect('konten');
    }
	public function edit($id){
        $this->db->select('*')->from('kategori');
		$this->db->order_by('nama_kategori','ASC');
		$kategori = $this->db->get()->result_array();
        $this->db->select('*')->from('konten');
        $this->db->where('id_konten', $id);
        $konten = $this->db->get()->result_array();
        $data = array(
            'konten' => $konten,
            'kategori' => $kategori,
            'title' =>"Perbarui Mobil"
        );
        $this->template->load('template','konten_edit', $data);
    }
}