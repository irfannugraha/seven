<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class C_login extends CI_Controller {

	function __construct(){
		parent::__construct();
		// $this->load->model('m_login');
		$this->load->model('class/Model');
	}
 
	public function index(){
		$data['judul'] = 'Seven - login';
		$data['status'] = null;
		$this->load->view('v_login', $data);
	}
	
	public function index2($status){
		$data['judul'] = 'Seven - login';
		$data['status'] = $status;
		$this->load->view('v_login', $data);
	}

	public function login(){
		$data['status'] = "suksesLogin";
		$email = $this->input->post('email');
		$pass = $this->input->post('password');

		$pelanggan = $this->Model->Get_Pelanggan($email, 'email')[0];
		$admin = $this->Model->Get_Admin($email, 'email')[0];

		var_dump($pelanggan);
		
		if ($pelanggan) {
			if($pass != $pelanggan->Get_Password()){
				redirect('c_login/index2/passSalah');
			}else{
				redirect('c_profil_biodataDiri/index/'.$pelanggan->Get_Id_pelanggan());
			}
		}elseif ($admin) {
			if($pass != $admin->Get_Password()){
				redirect('c_login/index2/passSalah');
			}else{
				redirect('c_admin/index/' .$admin->Get_Id_admin());
			}
		}else{
			redirect('c_login/index2/emailSalah');
		}
	}

	public function resetPassword($id){
		$pass = $this->input->post('password');
		$konfPass = $this->input->post('konfPassword');
		if ($pass != $konfPass || $pass == null) {
			echo '<script>alert("password salah")</script>';
		}else {
			// $this->m_login->updatePassword($id);
			echo "<script>
			alert('Password telah berhasil diubah');
			window.location.href='".base_url()."c_login"."';
			</script>";
		}
	}

	public function send(){
		$email = $this->input->post('curEmail');
		
		$pelanggan = $this->Model->Get_Pelanggan($email, 'email')[0];
		$admin = $this->Model->Get_Admin($email, 'email')[0];

		if ($pelanggan) {
			$id = $pelanggan->Get_Id_pelanggan();
		}elseif ($admin) {
			$id = $admin->Get_Id_admin();
		}

		$config = [
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'protocol'  => 'smtp',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_user' => 'hayosopo69@gmail.com',  // Email gmail
            'smtp_pass'   => 'Ilovegmail69',  // Password gmail
            'smtp_crypto' => 'ssl',
            'smtp_port'   => 465,
            'crlf'    => "\r\n",
            'newline' => "\r\n"
        ];
        $this->load->library('email', $config);
        $this->email->from('no-reply@seven.com');// Email dan nama pengirim
        $this->email->to($email); // Email penerima
        $this->email->subject('Atur ulang password anda');// Subject email
		$this->email->message('
		<form method="post" action='.base_url()."c_login/resetPassword/". $id .'>
			<div class="form-group"><label class="form-label">Password baru</label><input class="form-control" type="password" name="password"></div>
			<div class="form-group"><label class="form-label">Konfirmasi Password Baru</label><input class="form-control" type="password" name="konfPassword"></div>
			<div class="form-group"><button class="btn btn-primary btn-block" style="height: 40px;margin-top: 10px;" type="submit">Simpan</button></div>
		</form>
		');// Isi email
        if ($this->email->send()) {
			echo '
			<script>
				function myFunction() {
					alert("Email telah terkirim");
				}
			</script>
			';
			redirect('c_login/index');
        } else {
			echo '
				<script>
					function myFunction() {
						alert("Email telah terkirim");
					}
				</script>
			';
			redirect('c_login/index');
        }
	}
}