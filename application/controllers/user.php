<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    public function index()
	{
        $data['konten']="login";
        $data['judul']="Login AESOFIS";
        $this->load->view('login',$data);
    }
	public function register(){
       $data['konten']="register";
        $data['judul']="Login Aesofis";
        $this->load->view('register',$data);
    }
    public function simpan(){
        if($this->input->post('daftar')){
            $this->form_validation->set_rules('nama_user','Nama lengkap', 'trim|required');
            $this->form_validation->set_rules('username','Username', 'trim|required');
            $this->form_validation->set_rules('password','Password', 'trim|required');
            $this->form_validation->set_rules('level','Level', 'trim|required');
            
            if($this->form_validation->run() ==TRUE){
                $this->load->model('user_models');
                if($this->user_models->masuk()==TRUE){
                    $this->session->set_flashdata('pesan','Sukses Mendaftarkan Diri');
                    redirect('user','refresh');
                }else{
                    $this->session->set_flashdata('pesan','Gagal Mendaftarkan Diri');
                    redirect('user/register','refresh');
                }
            }else{
                $this->session->set_flashdata('pesan',validation_errors());
                 redirect('user/register','refresh');
            }
            
        }
    }
    public function proses_login(){
        if($this->input->post('login')){
            $this->form_validation->set_rules('username','Username', 'trim|required');
            $this->form_validation->set_rules('password','Password', 'trim|required');
            if($this->form_validation->run() ==TRUE){
                 $this->load->model('user_models');
                if($this->user_models->get_login()->num_rows()>0){
                    $data=$this->user_models->get_login()->row();
                    $array=array(
                        'login'=> TRUE,
                        'nama_user'=>$data->nama_user,
                        'username'=>$data->username,
                        'password'=>$data->password,
                        'level'=>$data->level,
                        'id_user'=>$data->id_user,
                    );
                    $this->session->set_userdata($array);
                    redirect('user/home','refresh');
                }else{
                    $this->session->set_flashdata('pesan','Username atau Password salah');
                    redirect('user','refresh');
                }
            }else{
                $this->session->set_flashdata('pesan',validation_errors());
                 redirect('user','refresh');
            }
    }
    }
	public function Logout()
	{
		$this->session->sess_destroy();
		$this->load->view('Login');
	}
	
	public function page_profile()
	{
		$data['konten']="page-profile";
		$this->load->view('template', $data);
    }
    public function profil_user()
	{
		$data['konten']="profil-user";
		$this->load->view('template', $data);
    }
    public function profil_kasir()
	{
		$data['konten']="profil-kasir";
		$this->load->view('template', $data);
	}
	// public function toko()
	// {
	// 	$data['konten']="toko";
	// 	$this->load->view('template', $data);
	// }
	public function home()
	{
		$data['konten']="home";
		$this->load->view('template', $data);
    }
    public function home_user()
	{
		$data['konten']="home_user";
		$this->load->view('template', $data);
	}
    // public function elements()
	// {
	// 	$data['konten']="elements";
	// 	$this->load->view('index', $data);
    // }
    // public function charts()
	// {
	// 	$data['konten']="charts";
	// 	$this->load->view('index', $data);
    // }
    // public function panels()
	// {
	// 	$data['konten']="panels";
	// 	$this->load->view('index', $data);
    // }
    // public function notifications()
	// {
	// 	$data['konten']="notifications";
	// 	$this->load->view('index', $data);
    // }
    // public function page_login()
	// {
	// 	$data['konten']="page-login";
	// 	$this->load->view('template', $data);
    // }
    // public function page_lockscreen()
	// {
	// 	$data['konten']="page-lockscreen";
	// 	$this->load->view('index', $data);
    // }
    // public function tables()
	// {
	// 	$data['konten']="tables";
	// 	$this->load->view('index', $data);
    // }
    // public function typography()
	// {
	// 	$data['konten']="typography";
	// 	$this->load->view('index', $data);
    // }
    // public function icons()
	// {
	// 	$data['konten']="icons";
	// 	$this->load->view('index', $data);
    // }
	// public function gallery()
	// {
	// 	$data['konten']="gallery";
	// 	$this->load->view('index', $data);
	// }
	// public function home()
	// {
	// 	$data['konten']="home";
	// 	$this->load->view('index', $data);
	// }
	// public function event()
	// {
	// 	$data['konten']="event";
	// 	$this->load->view('index', $data);
	// }
}
