<head>
  <title>
    <?php echo $this->lang->line('reg_header'); ?>
  </title>
  <link type="text/css" href="<?php echo base_url();?>images/ui-lightness/jquery-ui-1.8.custom.css" rel="stylesheet" />
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery-ui-1.8.custom.min.js"></script>
</head>	
	<script type="text/javascript">
	$(function() {
		$("#tabs").tabs({
		fx: { opacity: 'toggle' }
		});
		

	});
	</script>


<body style="background-color : #CCCCCC; text-align : center;" >
<p align="right">
<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/english/reg" class="header">English</a> | 
<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/indonesia/reg" class="header">Endonesa</a> 			
</p>
<div align="center">
<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all" style="width : 460px;">
	<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all">
		<li><a href="#tabs-1"><?php echo $this->lang->line('reg_user'); ?></a></li>
		<li><a href="#tabs-2"><?php echo $this->lang->line('reg_system'); ?></a></li>
		<li><a href="#tabs-3"><?php echo $this->lang->line('reg_done'); ?></a></li>
	</ul>
	<form action="<?php echo $this->config->item('vmin_path');?>index.php/vmin/user_reg" method="POST">
	<div id="tabs-1">
		<p>
                 <table>
                 <tr><td><?php echo $this->lang->line('login_user'); ?></td><td>:</td><td><input type="text" name="user"></td></tr>
                 <tr><td><?php echo $this->lang->line('login_pass'); ?></td><td>:</td><td><input type="password" name="pass1"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_2pass'); ?></td><td>:</td><td><input type="password" name="pass2"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_name'); ?></td><td>:</td><td><input type="text" name="user"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_email'); ?></td><td>:</td><td><input type="text" name="user"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_address'); ?></td><td>:</td><td><textarea></textarea></td></tr>
                 </table>
		</p>
	</div>
	<div id="tabs-2">
		<p>
		 <table>
                 <tr><td><?php echo $this->lang->line('reg_vps_name'); ?></td><td>:</td><td><input type="text" name="vps_name"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_vps_mem'); ?></td><td>:</td><td>
                 <select name="vps_mem">
                     <option value="16">16 MB</option>
                     <option value="32">32 MB</option>
                     <option value="64">64 MB</option>
                     <option value="128">128 MB</option>
                     <option value="256">256 MB</option>
                 </select>
                 </td></tr>
                 <tr><td><?php echo $this->lang->line('login_pass'); ?></td><td>:</td><td><input type="password" name="vps_pass1"></td></tr>
                 <tr><td><?php echo $this->lang->line('reg_2pass'); ?></td><td>:</td><td><input type="password" name="vps_pass2"></td></tr>
                 </table>
                 </p>
	</div>
	<div id="tabs-3">
	        <p>
	        <?php echo $this->lang->line('reg_aggrement'); ?>
	        </p>
		<p>
		<table>
		<tr><td><input onclick="window.location.replace('<?php echo site_url();?>/uvpanel/login')" type="button" value="<?php echo $this->lang->line('login_cancel'); ?>"></td><td></td><td><input type="submit" value="<?php echo $this->lang->line('reg_accept'); ?>"></td></tr>
		</table>
		</p>
		
	</div>
	</form>
</div>
</div>
</body>
</html>