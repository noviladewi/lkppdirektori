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
		$data['no.siup'] 	= array(
							'name'		=> 'no.siup',
							'id'		=> 'no.siup',
							'placeholder'=> 'No.Siup',
							);
		$data['npwp']	= array(
							'name'			=>'npwp',
							'id'			=> 'npwp',
							'placeholder'	=> 'NPWP',
							);
		$data['alamat']	= array(
							'name'			=> 'alamat',
							'id'			=> 'alamat',
							'placeholder'	=>'Alamat',
							);
		$data['telepon'] = array(
								'name'	=> 'telepon',
								'id'	=> 'telepon',
								'placeholder' =>'Telepon',
								);
		$data['website'] = array(
								'name' => 'website',
								'id' =>'website',
								'placeholder' => 'Website',
								);
		$data['jumlah_karyawan'] = array(
									'name'=> 'jumlah_karyawan',
									'id' =>'jumlah_karyawan',
									'placeholder' => 'Jumlah karyawan',
										);
		$data['pendapatan_tahunan'] = array(
										'name' => 'pendapatan_tahunan',
										'id' => 'pendapatan_tahunan',
										'placeholder' => 'Pendapatan tahunan',
										);
		$data['pimpinan_perusahaan'] = array(
										'name' => 'pimpinan_perusahaan',
										'id' => 'pimpinan_perusahaan',
										'placeholder' => 'Pimpinan perusahaan',
										);
		$data['alamat_pimpinan'] = array(
									 'name' =>'alamat_pimpinan',
									 'id' => 'alamat_pimpinan',
									 'placeholder' =>'Alamat pimpinan',
									 );
		$data['telepon_pimpinan'] = array(
										'name' =>'telepon_pimpinan',
										'id' => 'telepon_pimpinan',
										'placeholder' => 'Telepon pimpinan',
										);
		$data['email_pimpinan']	= array(
									 'name' =>'email_pimpinan',
									 'id' =>'email_pimpinan',
									 'placeholder' =>'Email pimpinan',
									 );
		$data['kontak_perushaan'] = array(
									'name'=>'kontak_perusahaan',
									'id' =>'kontak_perusahaan',
									'placeholder' => 'Kontak perusahaan',
									);
		$data['alamat_kontak'] = array(
									'name'=>'alamat_kontak',
									'id' =>'alamat_kontak',
									'placeholder' => 'Alamat kontak',
									);
		$data['telepon_kontak'] = array(
									'name' => 'telepon_kontak',
									'id' => 'telepon_kontak',
									'placeholder' =>'Telepon kontak',
									);
		$data['email_kontak'] = array(
									'name' => 'email_kontak',
									'id' =>'email_kontak',
									'placeh')		

	}
}