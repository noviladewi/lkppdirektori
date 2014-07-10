<?php
class M_portofolio extends CI_Model
{
	public function __construct()
		{
			$this->load->database();
		}
		
		function portofolio($id)
		{
			$this->db->where('portofolioID',$id);
			return $this->db->get('portofolio');
		}
		
		function form_edit_portofolio($id)
		{
			$portofolio=$this->portofolio($id)->result();
			foreach ($portofolio as porto)
				{
						$data['fname'] = array( 
													'name'=>'name_portof',
													'id'=>'name_portof',
													'size'=>'50',
													'value'=$porto->nama_portofolio,
						$data['fgambar'] = array(
													'name'=>'file_photo',
													'id'=>'file_photo'
													'size'=>'50',
													'value'=>$porto->file_foto,
						$data['fketerangan'] = array(
													'name'=>'keterangan',
													'id'=>'keterangan'
													'size'=>'50'.
													'value'=>$portp->keterangan,
			function pic_portofolio($id)
				{
					$field_name = " file";
					$image_path = $this -> upload->data($field_name);
					$save= array(
									'file'=>$image_path['file_name'],
									);
					$this->db->where('portofolioID',$id);
					$this->db->update('portofolio',$save);
				}
				
			function get_image_portofolio($id)
				{
					$this->db->select('file');
					$this->db->where('portofolioID',$id);
					return $this->db->get('portofolio');
				}
										
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
						
													