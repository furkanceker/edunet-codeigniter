<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$items = Kurslar::query("SELECT * FROM kurslar LIMIT 3");
		$items2 = Egitmenler::query("SELECT * FROM egitmenler LIMIT 4");
    
        $viewData = array(
            "kurslar" => $items,
            "egitmenler" => $items2,
        );

		$this->load->view('onyuz/index', $viewData);
	}
    public function hakkimizda()
	{
		$this->load->view('onyuz/hakkimizda');
	}
    public function kurslar()
	{
		$items = Kurslar::query("SELECT * FROM kurslar");
    
        $viewData = array(
            "kurslar" => $items,
        );
		$this->load->view('onyuz/kurslar',$viewData);
	}
    public function egitmenler()
	{
		$items = Egitmenler::query("SELECT * FROM egitmenler");
    
        $viewData = array(
            "egitmenler" => $items,
        );

		$this->load->view('onyuz/egitmenler',$viewData);
	}
    public function iletisim()
	{
		$this->load->view('onyuz/iletisim');
	}
    public function giris()
	{
		if(!$this->session->userdata('userlogin')){
			$this->load->view('onyuz/giris');
		}else {
			redirect('/');
		}
	}
	public function girisyap(){
		$email = $this->input->post('email');
		$pass = md5($this->input->post('password')); 
		
		$exist = Kullanicilar::find(['email'=>$email,'password'=>$pass]);
		if($exist){
	
			$this->session->set_userdata('userlogin',true);
			$this->session->set_userdata([
				'oturum'=>true,
				'id'=>$exist->id,
				'username'=>$exist->username,
				'email'=>$exist->email,
				'status'=>$exist->status,
			]);
			redirect('/');
		}else{
			$error = "E-Posta veya Şifre Hatalı";
			$this->session->set_flashdata('error',$error);
			redirect('giris');
		}
	}
    public function kayit()
	{
		if(!$this->session->userdata('userlogin')){
			$this->load->view('onyuz/uye-ol');
		}else {
			redirect('/');
		}
		
	}
	public function uyekayit(){
		$this->form_validation->set_rules('username', 'Kullanıcı Adı', 'trim|required|min_length[5]|max_length[50]|is_unique[kullanıcılar.username]');
		$this->form_validation->set_rules('email', 'E-Posta', 'trim|required|valid_email|is_unique[kullanıcılar.email]');
		$this->form_validation->set_rules('password', 'Şifre', 'trim|required|min_length[8]');
		if ($this->form_validation->run() == FALSE)
		{
			flashhome('danger','Kayıt Başarısız');
			back();
		}
		else
		{
			$username = $this->input->post('username');
			$email = $this->input->post('email');
			$pass = md5($this->input->post('password'));
			$data = [
				'username'=>$username,
				'email'=>$email,
				'password'=>$pass
			];
			Kullanicilar::insert($data);
			flashhome('success','Kayıt Başarılı');
			back();
		}
	}
    public function iletisimpost()
	{
		$data = ['name'=>postvalue('name'),
				 'mail'=>postvalue('mail'),
				 'subject'=>postvalue('subject'),
				 'message'=>postvalue('message'),
				];
		Iletisim::insert($data);
		back();
	}
	public function hesabim(){
		if(!$this->session->userdata('userlogin')){
			redirect('giris');
		}else{
			$id = $this->session->userdata('id');
			$data['config'] = Kullanicilar::find($id);
			$this->load->view('onyuz/hesabim',$data);
		}
	}
	public function mailekle(){
		$data = ['mail'=>postvalue('mail')];
		Mail::insert($data);
		back();
	}
	public function ayarlar(){
		$id = $this->session->userdata('id');
		$this->form_validation->set_rules('username', 'Kullanıcı Adı', 'trim|required|min_length[5]|max_length[50]|is_unique[kullanıcılar.username]');
		$this->form_validation->set_rules('email', 'E-Posta', 'trim|required|valid_email|is_unique[kullanıcılar.email]');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$data = ['email'=>$email,
				 'username'=>$username];
		$result = Kullanicilar::update($id,$data);
		if($result){
			flashhome('success','İşlem Başarılı');
			back();
		}else{
			flashhome('danger','İşlem Başarısız');
			back();
		}
	}
	public function cikis(){
		$this->session->sess_destroy();
		redirect('/');
	}
}