<?php
class M_dafbis extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}

	function form_edit($id)
	{
		$query = $this->select_dafbis($id);
		$edit	
		{
		$data['bidang_usaha'] = array(
									'name' 			=> 'bidang_usaha',
									'id'			=> 'bidang_usaha',
									'placeholder'	=> 'Bidang usaha' 
									'value'			=> $value->bidus
									);
		$data['industri']	= array(
									'name'			=> 'industri',
									'id'			=> 'industri',
									'placeholder'	=> 'Industri'
									'value'			=> $value->industri
								);
		$data['bentuk_usaha'] = array(
									'name'			=> 'bentuk_usaha',
									'id'			=> 'bentuk_usaha',
									'placeholder'	=> 'Bentuk usaha',
									'value'			=> $value->jenis_perusahaan
									);
		
		$data['no.siup'] 	= array(
									'name'			=> 'no.siup',
									'id'			=> 'no.siup',
									'placeholder'	=> 'No.Siup',
									'value'			=> $value->no_siup
							);
		$data['npwp']	= array(
									'name'			=> 'npwp',
									'id'			=> 'npwp',
									'placeholder'	=> 'NPWP',
									'value'			=> $value->npwp
							);
		$data['alamat']	= array(
									'name'			=> 'alamat',
									'id'			=> 'alamat',
									'placeholder'	=> 'Alamat',
									'value'			=> $value->alamat
							
							);
		$data['telepon'] = array(
									'name'			=> 'telepon',
									'id'			=> 'telepon',
									'placeholder'	=> 'Telepon',
									'value'			=> $value->telepon
								);
		$data['website'] = array(
									'name'			=> 'website',
									'id'			=> 'website',
									'placeholder'	=> 'Website',
									'value'			=> $value->website
								);
		$data['jumlah_karyawan'] = array(
									'name'			=> 'jumlah_karyawan',
									'id'			=> 'jumlah_karyawan',
									'placeholder'	=> 'Jumlah karyawan',
									'value'			=> $value->jml_karyawan
										);
		$data['pendapatan_tahunan'] = array(
									 'name'			=> 'pendapatan_tahunan',
									 'id'			=> 'pendapatan_tahunan',
									 'placeholder'	=> 'Pendapatan tahunan',
									 'value'		=> $value->pendapatan_thn
										);
		$data['pimpinan_perusahaan'] = array(
									 'name'			=> 'pimpinan_perusahaan',
									 'id'			=> 'pimpinan_perusahaan',
									 'placeholder'	=> 'Pimpinan perusahaan',
									 'value'		=> $value->nama_direktur
										);
		$data['alamat_pimpinan'] = array(
									 'name'			=>'alamat_pimpinan',
									 'id'			=>'alamat_pimpinan',
									 'placeholder'	=>'Alamat pimpinan',
									 'value'		=> $value->alamat_direk
									 );
		$data['telepon_pimpinan'] = array(
									 'name'			=> 'telepon_pimpinan',
									 'id'			=> 'telepon_pimpinan',
									 'placeholder'	=> 'Telepon pimpinan',
									 'value'		=> $value->tlp_direk
										);
		$data['email_pimpinan']	= array(
									 'name'			=> 'email_pimpinan',
									 'id'			=> 'email_pimpinan',
									 'placeholder'	=> 'Email pimpinan',
									 'value'		=> $value->email_direk
									 );
		$data['kontak_perushaan'] = array(
									'name'			=> 'kontak_perusahaan',
									'id'			=> 'kontak_perusahaan',
									'placeholder'	=> 'Kontak perusahaan',
									'value'			=> $value->nama_cp
									);
		$data['alamat_kontak'] = array(
									'name'			=> 'alamat_kontak',
									'id'			=> 'alamat_kontak',
									'placeholder'	=> 'Alamat kontak',
									'value'
									);
		$data['telepon_kontak'] = array(
									'name'			=> 'telepon_kontak',
									'id'			=> 'telepon_kontak',
									'placeholder'	=> 'Telepon kontak',
									);
		$data['email_kontak'] = array(
									'name' 			=> 'email_kontak',
									'id'			=> 'email_kontak',
									'placeholder'	=> 'Email kontak',
									);
	}
	return $data;		

	}

	function edit_dafbis($id)
	{
		$datadariform = 
	}
}

