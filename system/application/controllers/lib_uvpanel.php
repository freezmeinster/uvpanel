<?php
class Lib_uvpanel extends Controller {
	function Lib_uvpanel()
	{
		parent::Controller();	
		$lang = get_cookie('lang');
		$this->lang->load('link', $lang);
		$this->lang->load('content', $lang);
	}
	function set_lang(){
	$lang = $this->uri->segment(3);
	$before = $this->uri->segment(4);
	$dom = $this->config->item('vmin_url');
                   $name = "lang";
                   $value = $lang;
                   $expire = "86500";
                   $domain = $dom;
                   $path = "/";
                   $prefix = "";

         set_cookie($name, $value, $expire, $domain, $path, $prefix);
	 redirect("uvpanel/$before");
	}
	function check(){
	$rawpass= $this->input->post('password');
	$rawuser= $this->input->post('username');
	$user = trim($rawuser);
	$pass = trim($rawpass);
        $valid = $this->gui_uvpanel->cek_login($user,$pass);
             if ($valid == "1"){
                redirect("uvpanel/home");
             }else if($valid == "0"){
             redirect("uvpanel/login");
             }
	}
	
	function edit(){
        $name = $this->input->post('name');
        $email = $this->input->post('email');
        $phone = $this->input->post('phone');
        $address = $this->input->post('address');
	$this->gui_uvpanel->edit_user($name,$email,$phone,$address);
	redirect('uvpanel/home#tabs-1');
	}
	
	function edit_pass(){
        $pass1 = $this->input->post('pass1');
        $pass = sha1($pass1);
	$this->gui_uvpanel->edit_pass($pass);
	redirect('uvpanel/home#tabs-1');
	}
	
	function order_vps($name){
	$vps_name = $this->input->post('vps_name');
	$mem = $this->input->post('mem');
	$this->gui_uvpanel->send_remote_order($name,$vps_name,$mem);
	redirect('uvpanel/home#tabs-2');
	}
	
	function send_mess($name){
	$mess = $this->input->post('message');
	$this->gui_uvpanel->del_mess_out($name,$mess);
	redirect('uvpanel/home#tabs-3');
	}
	
	function send_req_start(){
	$name = $this->input->post('name');
	$this->gui_uvpanel->send_vps_start($name);
	redirect('uvpanel/home#tabs-2');
	}
	
	function req_start($name){
	$mess = $this->lang->line('req_start');
	echo "<div id=\"content\"><p>";
	echo "$mess $name";
	echo "<form method=\"POST\" action=\"../../index.php/lib_uvpanel/send_req_start/\" id=\"vps_help\">";
	echo "<input type=\"hidden\" name=\"name\" value=\"$name\">";
	echo "<input type=\"submit\" value=\"Start VPS\" class=\"ui.button\">";
	echo "</form></p></div>";
	}
	
	function change_vps_pass(){
	$context =  get_cookie('context');
	$pass = $this->input->post('password');
	$this->gui_uvpanel->change_vps_pass($pass,$context);
	$mess = $this->lang->line('system_changepass_success');
	echo "$mess $pass";
	}
	
	function change_vps_mem(){
	$context =  get_cookie('context');
	$mem = $this->input->post('mem');
	$mess = $this->lang->line('system_changemem_success');
	echo  $mess;
	}
	
	function del_mess($name){
	$this->gui_uvpanel->del_mess_out($name);
	redirect('uvpanel/home#tabs-3');
	}
	
        function logout(){
         $this->session->sess_destroy();
         delete_cookie("vps");
         redirect('uvpanel');
         }	
}
?>