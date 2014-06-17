<?php
class M_dafbis extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	function form_edit()
	{
		$data['bidang_usaha'] = array(
								'name' => 'bidang_usaha',
								'id' => 'bidang_usaha',
								'placeholder' => 'Bidang usaha' );
		$data['industri']	= array(
								'name' => 'industri',
								'id' => 'industri',
								'placeholder'=>'Industri'
								);
		$data['bentuk_usaha'] = array(
									'name' => 'bentuk_usaha',
									'id'=> 'bentuk_usaha',
									'placeholder' =>'Bentuk usaha',
									);
		$data['jenis_usaha'] = array(
									'name' => 'jenis_usaha',
									'id' => 'jenis_usaha',
									'placeholder' => 'Jenis usaha'
									);
		$data['no.siup'] = array(
								'name'=> 'no.siup',
								'id' => 'no.siup',
								'placeholder' => 'No.Siup',
								);
		$data['npwp'] = array(
							'name' =>'npwp',
							'id' => 'npwp',
							'placeholder' => 'NPWP')
	}
}