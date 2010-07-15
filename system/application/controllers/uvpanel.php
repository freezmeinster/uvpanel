<?php

class Uvpanel extends Controller {

	function Uvpanel()
	{
		parent::Controller();
		$lang = get_cookie('lang');
		$this->lang->load('link', $lang);
		$this->lang->load('content', $lang);
	}
	
	function index()
	{       
	        $log = $this->gui_uvpanel->cek_session();
                if ($log=="1"){
	        redirect('uvpanel/home');
		}
	}
	function about()
	{       
	        $log = $this->gui_uvpanel->cek_session();
	        $con = get_cookie('context');
                $vps = $this->gui_uvpanel->resolv_context($con);
                if ($log=="1" && $vps!=""){
		$data['pos'] = "about";
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('about');
		$this->load->view('footer');
		}else redirect('uvpanel/home');
	}
	function support()
	{  
	        $log = $this->gui_uvpanel->cek_session();
                $con = get_cookie('context');
                $vps = $this->gui_uvpanel->resolv_context($con);
                if ($log=="1" && $vps!=""){
		$data['pos'] = "support";
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('support');
		$this->load->view('footer');
		}else redirect('uvpanel/home');
	}
	
	function power()
	{  
	        $log = $this->gui_uvpanel->cek_session();
                $con = get_cookie('context');
                $vps = $this->gui_uvpanel->resolv_context($con);
                if ($log=="1" && $vps!=""){
		$data['pos'] = "power";
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('power');
		$this->load->view('footer');
		}else redirect('uvpanel/home');
	}
	
	function template()
	{  
	        $log = $this->gui_uvpanel->cek_session();
                $con = get_cookie('context');
                $vps = $this->gui_uvpanel->resolv_context($con);
                if ($log=="1" && $vps!=""){
		$data['pos'] = "template";
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('template');
		$this->load->view('footer');
		}else redirect('uvpanel/home');
	}
	
	function system()
	{  
	        $log = $this->gui_uvpanel->cek_session();
                $con = get_cookie('context');
                $vps = $this->gui_uvpanel->resolv_context($con);
                if ($log=="1" && $vps!=""){
		$data['pos'] = "system";
		$this->load->view('header',$data);
		$this->load->view('sidebar');
		$this->load->view('system');
		$this->load->view('footer');
		}else redirect('uvpanel/home');
	}
	
	
	function login()
	{
		$this->load->view('login');
	}
	function vps($context)
	{       
	        $this->gui_uvpanel->set_cookie('context',$context);
	        $vps = $this->gui_uvpanel->remote_sysinfo($context,'vps_name');
	        if ($vps == ""){
	          redirect('uvpanel/sorry');
	        }else if ($vps != ""){
	        $this->gui_uvpanel->set_cookie('context',$context);
		redirect('uvpanel/vps_home');
		}
	}
	
	function sorry()
	{ 
	        $this->load->view('sorry');
	}
	
	function vps_home(){
	 $log = $this->gui_uvpanel->cek_session();
	 $con = get_cookie('context');
         $vps = $this->gui_uvpanel->resolv_context($con);
         if ($log=="1" && $vps!=""){
	 $data['pos'] = "about";
	 $this->load->view('header',$data);
	 $this->load->view('sidebar');
	 $this->load->view('vps_home');
	 $this->load->view('footer');
		}else redirect('uvpanel/home');
	}
	
	function home()
	{ 
	        $log = $this->gui_uvpanel->cek_session();
                if ($log == "1"){
                 $this->load->view('home');
		}
	}

}
