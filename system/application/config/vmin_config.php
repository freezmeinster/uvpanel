<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    $config['vmin_url']	= "vps.cs.int-upi.edu";
    $config['vmin_dev']= "/dev/root";
    $config['vmin_ip']= "192.168.70";
    $config['vmin_path']= "http://192.168.70.248/vmin-full/";
    $config['vmin_pkg']= "/home/bahan";
    $config['vmin_home']= shell_exec("/usr/local/sbin/vserver-info system SYSINFO | grep vserver-Rootdir: | awk '{print $2}'");
    $config['vmin_dir']= shell_exec("/usr/local/sbin/vserver-info system SYSINFO | grep prefix: | awk '{print $2}'");    
    $config['user_vmin']="user";
    $config['pass_vmin']="bram";  
?>
