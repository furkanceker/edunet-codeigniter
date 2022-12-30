<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
		parent::__construct();
		if(!$this->session->userdata('adminlogin') && $this->uri->segment(2) && $this->uri->segment(2) != "login"){
			redirect('admin');
		} 
	}

	public function index()
	{
		if($this->session->userdata('adminlogin')){
			redirect('admin/panel');
		}
		$this->load->view('admin/login');
		
	}

	public function login(){
		$username = $this->input->post('username');
		$pass = md5($this->input->post('password')); 
		
		$exist = Yonetim::find(['username'=>$username,'password'=>$pass]);
		if($exist){
			$this->session->set_userdata('adminlogin',true);
			$this->session->set_userdata('admininfo',$exist);
			redirect('admin/panel');
		}else{
			$error = "E-Posta veya Şifre Hatalı";
			$this->session->set_flashdata('error',$error);
			redirect('admin');
		}
	}

	public function panel(){
		$data['head'] = "Site Ayarları";
		$data['config'] = Ayarlar::find(1);
		$this->load->view('admin/panel',$data);
	}
	public function panelpost(){
		$config = Ayarlar::find(1);

		$data = ['name'=>postvalue('name'),
				 'address'=>postvalue('address'),
				 'phone'=>postvalue('phone'),
				 'mail'=>postvalue('mail'),
				 'facebook'=>postvalue('facebook'),
				 'twitter'=>postvalue('twitter'),
				 'instagram'=>postvalue('instagram'),
				];
/* 		if($_FILES['logo']['size']>0){
			$data['logo']=imageupload('logo','config');
			unlink($config->logo);
		}
		if($_FILES['icon']['size']>0){
			$data['icon']=imageupload('icon','config');
			unlink($config->icon);
		} */
		Ayarlar::update(1,$data);
		flash('success','check','İşlem Başarılı');
		back();
	}

	public function egitmen(){
		$data['head'] = "Eğitmenler";
		$data['config']=Egitmenler::query("select * from egitmenler");
		$this->load->view('admin/egitmen',$data);
	}
	public function egitmenpost(){
		$data = ['name'=>postvalue('name'),
				 'tag'=>postvalue('tag'),
				 'twitter'=>postvalue('twitter'),
				 'facebook'=>postvalue('facebook'),
				 'instagram'=>postvalue('instagram'),
				];
		if($_FILES['image']['size']>0){
			$data['image']=imageupload('image','egitmen');
		}

		Egitmenler::insert($data);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function egitmensil($id){
		$config = Egitmenler::find(['id'=>$id]);
		unlink($config->image);
		Egitmenler::delete($id);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function kurs(){
		$data['head'] = "Kurslar";
		$data['config']=Kurslar::query("select * from kurslar");
		$this->load->view('admin/kurs',$data);
	}
	public function kurspost(){
		$data = ['title'=>postvalue('title'),
				 'tag'=>postvalue('tag'),
				 'price'=>postvalue('price'),
				 'time'=>postvalue('time'),
				 'author'=>postvalue('author'),
				];
		if($_FILES['image']['size']>0){
			$data['image']=imageupload('image','kurs');
		}

		Kurslar::insert($data);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function kurssil($id){
		$config = Kurslar::find(['id'=>$id]);
		unlink($config->image);
		Kurslar::delete($id);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function destek(){
		$data['head'] = "Destek";
		$data['destekler']=Iletisim::query("select * from iletisim");
		$this->load->view('admin/destek',$data);
	}
	public function desteksil($id){
		Iletisim::delete($id);
		flash('success','check','İşlem Başarılı');
		back();
	}
	public function sifre(){
		$data['head'] = "Şifre Değiştirme";
		$this->load->view('admin/sifre',$data);
	}
	public function sifrepost(){
		$pass = md5($this->input->post('oldpass'));
		$exist = Yonetim::find(['password'=>$pass]);
		if($exist){
			$data = ['password'=>md5(postvalue('newpass'))];

			Yonetim::update(1,$data);
			flash('success','check','İşlem Başarılı');
			back();
		} else {
			flash('danger','ban','İşlem Başarısız');
			back();
		}

	}
	public function kullanici(){
		$data['head'] = "Kullanıcılar";
		$data['kullanicilar']=Kullanicilar::query("select * from kullanıcılar");
		$this->load->view('admin/kullanicilar',$data);
	}
	public function kullaniciyap($id){
		$data = ['status'=>0];
		$result = Kullanicilar::update($id,$data);
		if($result){
			flash('success','check','İşlem Başarılı');
			back();
		}else {
			flash('danger','ban','İşlem Başarısız');
			back();
		}
	}
	public function egitmenyap($id){
		$data = ['status'=>1];
		$result = Kullanicilar::update($id,$data);
		if($result){
			flash('success','check','İşlem Başarılı');
			back();
		}else {
			flash('danger','ban','İşlem Başarısız');
			back();
		}
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('admin');
	}
}
