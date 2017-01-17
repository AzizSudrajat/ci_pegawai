<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		// $this->load->model('uploads');
	}

  public function index(){
    $this->load->view('superadmin/header');
    $this->load->view('superadmin/dashboard');
    $this->load->view('superadmin/footer');
  }

  public function tampiladmin(){
    $this->load->view('superadmin/header');
    $this->load->view('superadmin/tampil_admin');
    $this->load->view('superadmin/footer');
  }

  public function tambahadmin(){
    $this->load->view('superadmin/header');
    $this->load->view('superadmin/tambah_admin');
    $this->load->view('superadmin/footer');
  }

  public function insert_pegawai(){
		$this->load->library('upload');
		$nmfile = "file_".time();
    $config['upload_path'] = './uploads/pegawai/';
  	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    $config['file_name'] = $nmfile;
		$this->upload->initialize($config);

		if($_FILES['gambar']['name'])
		{
			if (!$this->upload->do_upload('gambar'))
			{
				redirect('admin/tambahpegawai');
        	}else{

          	$gbr = $this->upload->data();
            $data = array(
            'nama_dp' =>$this->input->post('depan'),
            'nama_blk' =>$this->input->post('belakang'),
						'tempat' =>$this->input->post('tempat'),
						'tanggal_lahir' =>$this->input->post('lahir'),
						'jenis_kelamin' =>$this->input->post('jk'),
						'pekerjaan' =>$this->input->post('posisi'),
						'tipe_pekerjaan' =>$this->input->post('tipe'),
						'telpon' =>$this->input->post('telpon'),
						'email' =>$this->input->post('email'),
						'alamat' =>$this->input->post('alamat'),
						'keahlian_umum' =>$this->input->post('tentang'),
            'gambar' =>$gbr['file_name']
            );

            $this->uploads->insert_pegawai($data);
            redirect('admin/welcome/tampilpegawai');
            }
        }
    }

  public function ubahadmin(){
    $this->load->view('superadmin/header');
    $this->load->view('superadmin/ubah_admin');
    $this->load->view('superadmin/footer');
  }

  public function hapusadmin(){
    $this->load->view('superadmin/header');
    $this->load->view('superadmin/hapus_admin');
    $this->load->view('superadmin/footer');
  }
}
