<?php
class Lkppdirektori extends CI_Controller {

	public function __construct()
	{
		parent ::__construct();
		$this->load->model('m_profile');
		
		
	}
	
		public function index()		
		{
		$this->load->view("shared/header");
		$this->load->view("search/beranda");
		$this->load->view("shared/footer");
		
		}

		public function daftar()
		{
		
			$this->load->view("shared/header");
			$this->load->view("profile/daftar");
			$this->load->view("shared/footer");
			
			
		}
		
		
		public function dafbis()
		{
			$this->load->view("shared/header");
			$this->load->view("profile/dafbis");
			$this->load->view("shared/footer");
		}
		
		public function vdafbis()
		{
			$data["daftar_bisnis"] = $this->m_profile->select_dafbis();
			$this->load->view("shared/header");
			$this->load->view("profile/vdafbis");
			$this->load->view("shared/footer");

		}
		public function add_bussiness()
		{
			$this->m_profile->input_add_bussiness();
			
			$config['upload_path'] = './application/assets/img/upload/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size']	= '1000';
			$config['max_width']  = '1024';
			$config['max_height']  = '768';
			$this->load->library('upload', $config);
			$field_name = "photo";
			if(!$this->upload->do_upload($field_name))
			{
		
			redirect('dafbis');
			}
			
			else
		{
			$this->m_profile->save_image();
			redirect('dafbis');
		
			
		}
	}

		
		public function beranda()
		{
			$this->load->view("shared/header");
			$this->load->view("search/beranda");
			$this->load->view("shared/footer");
		
		}	
		
		public function pencarian_detail()
		{
			$this->load->view("shared/header");
			$this->load->view("search/pencarian_detail");
			$this->load->view("shared/footer");
		}
		
		public function print_out()
		{
			$this->load->view("shared/header");
			$this->load->view("profile/vdafbis");
			$this->load->view("shared/footer");
		}

		public function searching()
		{
			$data['pencarian_detail']=$this->m_profile->search_company();
			// $data['pencarian_detail']=$this->m_profile->search_establishment();
			// $data['pencarian_detail']=$this->m_profile->search_totalmin();
			// $data['pencarian_detail']=$this->m_profile->search_income();
			
		if($data['pencarian_detail']==null){ 
			
		
			 print 'maaf data yang anda cari tidak ada atau keywordnya salah';
	         print br(2);
	         print anchor('lkppdirektori/pencarian_detail','kembali');
		}
		else {
				$this->load->view("hasil_pencarian",$data);
		}
	
		}

		public function edit

}

?>