<?php
class M_profile extends CI_Model
{
		public function __construct()
				{
					$this->load->database();
					$this->load->library('Ion_auth');
				}
				
		function input_add_bussiness(){
		
			$data_input = array (
							'userID'=>$this->ion_auth->get_user_id(),
							'nama_perusahaan'=>$this->input->post('company-name'),
							'logo'=>$this->input->post('pic'),
							'jenis_perusahaan'=>$this->input->post('company'),
							'since_date'=>$this->input->post('since-date'),
							'no_siup'=>$this->input->post('no-siup'),
							'bidus'=>$this->input->post('bid-us'),
							'npwp'=>$this->input->post('npwp'),
							'industri'=>$this->input->post('industry'),
							'alamat'=>$this->input->post('address'),
							'jml_karyawan'=>$this->input->post('jumlah-kar'),
							'kota'=>$this->input->post('city'),
							'pendapatan_thn'=>$this->input->post('pendatahun'),
							'provinsi'=>$this->input->post('prov'),
							'website'=>$this->input->post('alamatweb'),
							'kode_pos'=>$this->input->post('kodpos'),
							'keteranganlain'=>$this->input->post('ket'),
							'nama_direktur'=>$this->input->post('name-direk'),
							'nama_cp'=>$this->input->post('name_contac'),
							'alamat_direk'=>$this->input->post('address-direk'),
							'alamat_cp'=>$this->input->post('address-cp'),
							'tlp_direk'=>$this->input->post('tlp_direk'),
							'tlp_cp'=>$this->input->post('tlp-cp'),

		);
		
		$this->db->insert('dafbis',$data_input);
		
		}
		
		function save_image()
	{
		$field_name = "photo";
		$image_path = $this->upload->data($field_name);
		$save= array(
							'file_photo' =>$image_path['file_name'],
								);
		$this->db->insert('dafbis',$save);
	
	}
	function find_company($limit,$offset)
	{
		$this->db->where('nama_perusahaan');
			


	}	

	function search_company()
	{
		$c = $this->input->POST ('search_kebutuhan');
		$s = $this->input->POST('company');
		$t = $this->input->POST('search_total');
		$i= $this->input->POST('search_income');
		$this->db->like('jenis_perusahaan',$s);
		$this->db->like('nama_perusahaan',$c);
		$this->db->like('jml_karyawan', $t);
		$this->db->like('pendapatan_thn',$i);
		$query = $this->db->get ('dafbis');
		return $query->result();
	}
	
	
	function select_dafbis()
	{
		$query = $this->db->get("dafbis");
		return $query;
	}
}