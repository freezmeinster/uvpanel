<head>
  <title>
    <?php 
    echo $this->lang->line('user_header'); 
    $user = $this->session->userdata('user');
    ?>
  </title>
  <link type="text/css" href="<?php echo base_url();?>images/ui-lightness/jquery-ui-1.8.custom.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>/images/Refresh.css" type="text/css" />
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery-ui-1.8.custom.min.js"></script>
</head>	
<script type="text/javascript" src="<?php echo base_url();?>images/js/login.js"></script>
<body style="background-color : #CCCCCC; text-align : center;" >
<p align="right">
<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/english/home" class="header">English</a> | 
<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/indonesia/home" class="header">Endonesa</a> 			
</p>
<div align="center">

<div id="user_profile" title="<?php echo $this->lang->line('edit_profile'); ?>">
	<p>
	<form action="<?php echo site_url();?>/lib_uvpanel/edit" method="POST">
	 <table>
                 <tr><td><?php echo $this->lang->line('reg_name'); ?></td><td>:</td><td><input type="text" value="<?php echo $this->gui_uvpanel->get_user_info('name');?>" name="name"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_email'); ?></td><td>:</td><td><input type="text" value="<?php echo $this->gui_uvpanel->get_user_info('email');?>" name="email"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_phone'); ?></td><td>:</td><td><input type="text" value="<?php echo $this->gui_uvpanel->get_user_info('phone');?>" name="phone"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_address'); ?></td><td>:</td><td><textarea name="address"><?php echo $this->gui_uvpanel->get_user_info('address');?></textarea></td></tr>
                 <tr><td></td><td></td><td><input type="submit" value="<?php echo $this->lang->line('create_edit');?>"></td></tr>
          </table>
         </form>   
	</p>
</div>

<div id="support" style="display: none;" title="<?php echo $this->lang->line('support_header'); ?>">
<p>
<form action="<?php echo site_url();?>/lib_uvpanel/send_mess/<?php echo $this->session->userdata('user');?>" method="POST">
 <table cellpadding="10" align="center">
  <tr><td><?php echo $this->lang->line('support_message'); ?></td></tr>
  <tr><td><textarea style="width: 350px; height:100px;" name="message"></textarea></td></tr>
  <tr><td><input type="submit" value="<?php echo $this->lang->line('support_send');?>"></td></tr>
  </table>
</form>
</p>
</div>

<div id="del_mess" style="display: none;" title="<?php echo $this->lang->line('del_mess'); ?>">
<p>
 <?php echo $this->lang->line('del_warning'); ?>
 <input type="button" value="<?php echo $this->lang->line('reg_accept'); ?>" onclick="window.location.replace('<?php echo site_url();?>/lib_uvpanel/del_mess/<?php echo $user;?>')">
</p>
</div>

<div id="user_pass" title="<?php echo $this->lang->line('edit_password'); ?>">
  <p>
    <form action="<?php echo site_url();?>/lib_uvpanel/edit_pass" method="POST">
    <table>
      <tr><td><?php echo $this->lang->line('login_pass'); ?></td><td>:</td><td><input type="password" name="pass1"></td></tr>
      <tr><td></td><td></td><td><input type="submit" value="<?php echo $this->lang->line('create_edit');?>"></td></tr>
    </table>
    </form>
  </p>
</div>

<div id="vps" title="<?php echo $this->lang->line('order'); ?>">
  <p>
    <form action="<?php echo site_url();?>/lib_uvpanel/order_vps/<?php echo $this->session->userdata('user');?>" method="POST">
    <table>
        <tr><td><?php echo $this->lang->line('reg_vps_name'); ?></td><td>:</td><td><input type="text" name="vps_name"></td></tr>
        <tr><td><?php echo $this->lang->line('create_mem');?></td><td>:</td><td><select name="mem" >
				                                      <option value="16">16 Mb</option>
				                                      <option value="24">24 Mb</option>
				                                      <option value="32">32 Mb</option>
				                                      <option value="64">64 Mb</option>
				                                      <option value="128">128 Mb</option>
				                                      <option value="256">256 Mb</option>
				                                      </select>
				    </td></tr>
      <tr><td></td><td></td><td><input type="submit" value="<?php echo $this->lang->line('order');?>"></td></tr>
    </table>
    </form>
  </p>
</div>

<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all" style="width : 600px;">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li><a href="#tabs-1"><?php echo $this->lang->line('reg_user'); ?></a></li>
		<li><a href="#tabs-2"><?php echo $this->lang->line('reg_system'); ?></a></li>
		<li><a href="#tabs-3"><?php echo $this->lang->line('mess'); ?></a></li>
		<li><a href="#logout" onclick="window.location.replace('<?php echo site_url();?>/lib_uvpanel/logout')">Logout</a></li>
	</ul>
	<form action="<?php echo $this->config->item('vmin_path');?>index.php/vmin/user_reg" method="POST">
	<div id="tabs-1">
	       
		<p>
                 <table cellpadding="10">
                 <tr><td><?php echo $this->lang->line('login_user'); ?></td><td>:</td><td><?php echo $this->gui_uvpanel->get_user_info('user');?></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_name'); ?></td><td>:</td><td><?php echo $this->gui_uvpanel->get_user_info('name');?></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_email'); ?></td><td>:</td><td><?php echo $this->gui_uvpanel->get_user_info('email');?></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_phone'); ?></td><td>:</td><td><?php echo $this->gui_uvpanel->get_user_info('phone');?></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_address'); ?></td><td>:</td><td><?php echo $this->gui_uvpanel->get_user_info('address');?></td></tr>
                 </table>
                 <input type="button" id="edit-user" value="<?php echo $this->lang->line('edit_profile'); ?>">
                 <input type="button" id="edit-pass" value="<?php echo $this->lang->line('edit_password'); ?>">
		</p>
	</div>
	<div id="tabs-2">
		<p>
		<h1><?php echo $this->lang->line('user_vps'); ?></h1>
		 <table id="vps_list">
		 <tr><th><?php echo $this->lang->line('reg_vps_name'); ?></th><th><?php echo $this->lang->line('side_mem'); ?></th><th>Context</th><th>Status</th></tr>
                 <?php echo $this->gui_uvpanel->get_user_vps();?>
                 </table>
                 </p>
                 <p>
		<h1><?php echo $this->lang->line('order_vps'); ?></h1>
		 <table>
		 <tr><th><?php echo $this->lang->line('reg_vps_name'); ?></th><th><?php echo $this->lang->line('side_mem'); ?></th><th>Status</th></tr>
                 <?php $this->gui_uvpanel->get_remote_order($user);?>
                 </table>
                  <input type="button" id="order-vps" value="<?php echo $this->lang->line('order'); ?>">
                 </p>
	</div>
	<div id="tabs-3">
	        <h1><?php echo $this->lang->line('mess_inbox'); ?></h1>
	        <p>
	        <table>
		 <tr><th>NO</th><th><?php echo $this->lang->line('mess'); ?></th><th><?php echo $this->lang->line('date'); ?></th></tr>
                 <?php echo $this->gui_uvpanel->get_user_mess();?>
                 <input type="button" class="ui-button" value="<?php echo $this->lang->line('del_mess'); ?>" onclick="del_mess();"/>
                 </table>
	        </p>
	        <h1><?php echo $this->lang->line('mess_create'); ?></h1>
	        <p>
	        <table>
		 <tr><th>NO</th><th><?php echo $this->lang->line('mess'); ?></th><th>Status</th><th><?php echo $this->lang->line('date'); ?></th></tr>
                 <?php echo $this->gui_uvpanel->get_user_out();?>
                 
                 </table>
		<input type="button" onmousedown="support()" value="<?php echo $this->lang->line('mess_create');?>">
		
	        </p>
	</div>
	</form>
</div>
</div>
</body>
</html>
