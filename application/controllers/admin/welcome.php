<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('uploads');

	}
	public function index(){
		// $data['record'] = $this->uploads->getPegawai()->row_array();
		$this->load->view('admin/header');
		$this->load->view('admin/dashboard');
		$this->load->view('admin/footer');
	}

	public function tampilpegawai(){
		$data['record'] = $this->uploads->getPegawai();
		$this->load->view('admin/header');
		$this->load->view('admin/tampil_pegawai', $data);
		$this->load->view('admin/footer');
	}

	public function tambahpegawai(){
		$this->load->view('admin/header');
		$this->load->view('admin/tambah_pegawai');
		$this->load->view('admin/footer');
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

		public function ubahpegawai(){
			$data['record'] = $this->uploads->getPegawai();
			$this->load->view('admin/header');
			$this->load->view('admin/ubah_pegawai', $data);
			$this->load->view('admin/footer');
		}

		public function edit_pegawai($id){
			$data['record'] = $this->uploads->getSinglepegawai($id)->row_array();
			$this->load->view('admin/header');
			$this->load->view('admin/edit_pegawai',$data);
			$this->load->view('admin/footer');
		}

		public function update_pegawai(){
			$this->load->library('upload');
			$nmfile = "file_".time();
	    $config['upload_path'] = './uploads/pegawai/';
	  	$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
	    $config['max_size'] = '200488';
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

	            $this->uploads->updatepegawai($data, $this->input->post('id'));
	            redirect('admin/welcome/tampilpegawai');

	            }
	        }
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
					'gambar' =>$this->input->post('gambar')
					);

					$this->uploads->updatepegawai($data, $this->input->post('id'));
					redirect('admin/welcome/tampilpegawai');
		}

		public function hapuspegawai(){
			$data['record'] = $this->uploads->getPegawai();
			$this->load->view('admin/header');
			$this->load->view('admin/hapus_pegawai', $data);
			$this->load->view('admin/footer');
		}

		public function hapus_pegawai($id){
			$this->uploads->hapuspegawai($id);
			redirect('admin/welcome/tampilpegawai');
		}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
