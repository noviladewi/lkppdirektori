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
		
		
		public function add_profile_company()
		{
			$this->load->view("shared/header");
			$this->load->view("profile/add_profile_company");
			$this->load->view("shared/footer");
		}
		
		public function vuser_company()
		{
			$data["daftar_bisnis"] = $this->m_profile->select_dafbis();
			$this->load->view("shared/header");
			$this->load->view("profile/vuser_company");
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
		public function hasil_pencarian ()
		{
			$this->load->view("shared/header");
			$this->load->view("hasil_pencarian");
			$this->load->view("shared/footer");
		}
		
		public function search_profile()
		{
			$limit=1;
			parse_str($_SERVER['QUERY_STRING'],$_GET);
						$this->load->helper('form');
			if(empty($_GET['result']))
					{$offset=0;}
					else
					{$offset = $_GET['result'];
			$data['company_profile']=$this->m_profile->find_company($limit, $offset)->result();
			$this->load->library('pagination');
			$config['total_rows'] =count ($this->m_profile->count_find_company());
			$config['per_page'] = $limit;
			$config['uri_segment'] = 3;
			$config['page_query_string'] = TRUE;
			$config['query_string_segment'] = 'result';
			$this->pagination->initialize($config);
			$data['pagination'] = $this->pagination->create_links();
			$data['total_records'] = $this->m_profile->count_find_company();
			$this->load->view("shared/footer");
			$this->load->view("shared/Header");
			}

		}
		public function search_result($id)
		{
			$this->load->helper('form');
			$data['desc_profile']=$this->m_profile->profile_company($id)->result();
			$data['get_category']=$this->m_profile ->selct_profile_byCategory($id);
			// load the library
			$this->load->library('googlemaps');
			$config['zoom'] = 'auto';
			$this->googlemaps->initialize($config);
			$data['status']=$this->m_profile->profile_company($id)->row();
			$status=$this->m_profile->profile_company($id)->row();
			$data['pic']=$this->m_profile->photo_profile($status);
			$desprofile=$this->m_profile->profile_company($id)->result();
			foreach ($desprofile as $getDirection )
				{	
					$marker = array();	
	 				$marker['position'] = $getDirection->lat.','.$getDirection->lng;
					$this->googlemaps->add_marker($marker);
				}
			$data['map'] = $this->googlemaps->create_map();
			$data['dataportofolio']=$this->m_profile->portofolio_byCompanyID($id)->result();
			$this->load->view("shared/header");
			$this->load->view("shared/footer");	
		}
		
		public function portofolio()
		{
			$this->load->view("shared/header");
			$this->load->view("portofolio/add_portof");
			$this->load->view("shared/footer");
			
		}
		
		// public function search()
			// {
				// $limit=$_GET['pagination'];
				// if (empty($_GET['result']))
					// {$offset=0;}
						// else
					// {$offset=($_GET['result']-1)*2;}
				// parse_str($_SERVER['QUERY_STRING'],$_GET);
				// if ($_GET['btn']=='keyword1')
					// {
						// $data['company_profile']=$this->m_profile->find_industry($limit,$offset);
						// $his->load->library('pagination');
						// $config['base_url'] = site_url('lkppdirektori/search?search_industry=keyword1&pagination='.$limit)
						// $config['total_rows'] = count($this->m_profile->find_industry_all());
						// $config['next_link'] = 'Next';
						// $config['prev_page'] = 'Prev';
						// $config['per_page'] = $limit;
						// $config['uri_segment'] = 3;
						// $config['page_query_string']=TRUE;
						// $config['query_string_segment']= 'result';
						// $this->pagination->initialize($config);
						// $data['pagination'] = $this->pagination->create_links();
						// $data['total_records'] = count($this->m_profile->find_industry_all());
						// $this->load->view("shared/header");
						// $this->template->load('lkppdirektori/search',$data);
						// $this->load->view("shared/footer");
					// }
					
				// if($_GET['btn']=='keyword2')
					// {
						// $data['company_profile']=$this->m_profile->all_location($limit, $offset);
						// $this->load->library ('pagination');
						// $config['base_url'] = site_url('lkppdirektori/search?search_location=&btn=keyword2&pagination='.$limit)
						// $config['total_rows'] = count($this->m_profile->find_location_all());
						// $config['next_link'] = 'Next';
						// $config['prev_page'] = 'Prev';
						// $config['per_page'] = $limit;
						// $config['uri_segment'] = 3;
						// $config['page_query_string']=TRUE;
						// $config['query_string_segment']= 'result';
						// $this->pagination->initialize($config);
						// $data['pagination'] = $this->pagination->create_links();
						// $data['total_records'] = count($this->m_profile->find_location_all());
						// $this->load->view("shared/header");
						// $this->template->load('lkppdirektori/search',$data);
						// $this->load->view("shared/footer");
					// }
				
				
}