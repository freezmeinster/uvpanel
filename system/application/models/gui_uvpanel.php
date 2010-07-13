<?php

class Gui_uvpanel extends Model {

	function Gui_uvpanel()
	{
		parent::Model();	
	}
	
        function set_cookie($name,$value){
                   $dom = $this->config->item('vmin_url');
                   $expire = "86500";
                   $path = "/";
                   $prefix = "";

         set_cookie($name, $value, $expire, $dom, $path, $prefix);
	}
        function cek_login($user,$pass){
         $target = $this->config->item('vmin_path');
         $enc_pass = sha1($pass);
         $data = array('user' => $user,'pass' => $enc_pass,);
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/user_rem_check");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $a = curl_exec($ch);
         curl_close($ch);
         
           if ( $a == "1" ){
                  $newdata = array(
                      'user'  => $user,
                      'pass'  => $enc_pass,
                      );
                  $this->session->set_userdata($newdata);
                 return 1;
              } else if ( $a == "0" ) {
                 return 0;
            }
         }
        function cek_session(){
         $user = $this->session->userdata('user');
         $pass = $this->session->userdata('pass');   
         $data = array('user' => $user,'pass' => $pass,);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/user_rem_check");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $a = curl_exec($ch);
         curl_close($ch);
         if ($a == 1 ){
            return 1;        
         }else if ($a == 0 ){
            redirect('uvpanel/login');
         }
       
        }
        
        function get_user_info($field){
         $user = $this->session->userdata('user'); 
         $data = array('user' => $user);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/user_rem_info/$field");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $a = curl_exec($ch);
         curl_close($ch);
         echo $a;
        }
        
        function edit_user($name,$email,$phone,$address){
         $user = $this->session->userdata('user'); 
         $data = array('user' => $user,'name' => $name,'phone' => $phone,'email' => $email,'address' => $address);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/user_rem_edit");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_exec($ch);
         curl_close($ch);
        }
        
         function edit_pass($pass){
         $user = $this->session->userdata('user'); 
         $data = array('pass' => $pass,'user' => $user);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/user_rem_pass");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         curl_exec($ch);
         curl_close($ch);
        }
        
        function get_user_vps(){
        $user = $this->session->userdata('user');
        $target = $this->config->item('vmin_path');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/list_vps/$user");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $a = curl_exec($ch);
        curl_close($ch);
        return $a;
        }
        
        function get_user_mess(){
        $user = $this->session->userdata('user');
        $target = $this->config->item('vmin_path');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/list_mess/$user");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $a = curl_exec($ch);
        curl_close($ch);
        return $a;
        }
        
         function get_user_out(){
        $user = $this->session->userdata('user');
        $target = $this->config->item('vmin_path');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/list_mess_out/$user");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $a = curl_exec($ch);
        curl_close($ch);
        return $a;
        }
        
        function del_mess_out($user){
        $target = $this->config->item('vmin_path');
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/del_mess/$user");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_exec($ch);
        curl_close($ch);
        }
        
        function remote_sysinfo($context,$part){ 
         $data = array('context' => $context);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/sysinfo/$part");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $a = curl_exec($ch);
         curl_close($ch);
         return $a;
        }
        
        function send_remote_order($user,$vps_name,$mem){
         $data = array('vps_name' => $vps_name,'memory' => $mem);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/create_order/$user");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $a = curl_exec($ch);
         curl_close($ch);
        }
        
        function send_vps_start($name){
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/start_vps/$name");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $a = curl_exec($ch);
         curl_close($ch);
        }
        
        function send_remote_message($user,$mess){
         $data = array('message' => $mess);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/user_message/$user");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $a = curl_exec($ch);
         curl_close($ch);
        }
        
        function get_remote_order($user){
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/list_order/$user");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         $a = curl_exec($ch);
         curl_close($ch);
         echo $a;
        }
        
        function change_vps_pass($pass,$context){
         $data = array('pass' => $pass,'context' => $context);
         $target = $this->config->item('vmin_path');
         $ch = curl_init();
         curl_setopt($ch, CURLOPT_URL, "$target/index.php/remote_vmin/change_vps_pass");
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
         $a = curl_exec($ch);
         curl_close($ch);
         return $a;
        }
        
        
        function resolv_context($con){
             $data = shell_exec("sudo /usr/local/sbin/vserver-stat | grep $con | awk '{ print $8}'");
             return $data;
        }
	
}
?>