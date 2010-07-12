<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>

<meta name="Description" content="Information architecture, Web Design, Web Standards." />
<meta name="Keywords" content="your, keywords" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="Distribution" content="Global" />
<meta name="Author" content="Erwin Aligam - ealigam@gmail.com" />
<meta name="Robots" content="index,follow" />
        <script type="text/javascript" src="<?php echo base_url();?>/images/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo base_url();?>/images/js/jquery.validate.js"></script>
         <script type="text/javascript" src="<?php echo base_url();?>/images/js/jquery.form.js"></script>
        
		<script type="text/javascript" src="<?php echo base_url(); ?>/images/js/jquery.progressbar.min.js"></script>
		<script type="text/javascript" src="<?php echo base_url(); ?>/images/js/facebox.js" ></script> 
		<script>
		jQuery(document).ready(function($) {
                  $('a[rel*=facebox]').facebox()
                 }) 
		</script>
		
		<script>
			var progress_key = '';
			
			$(document).ready(function() {
				$("#spaceused1").progressBar({ 
				barImage: '<?php echo base_url(); ?>/images/progressbg_red.gif',
				boxImage: '<?php echo base_url(); ?>/images/progressbar.gif',
				} );
				$("#spaceused2").progressBar({ 
				barImage: '<?php echo base_url(); ?>/images/progressbg_green.gif',
				boxImage: '<?php echo base_url(); ?>/images/progressbar.gif',
				} );
                                $("#spaceused3").progressBar({ 
				barImage: '<?php echo base_url(); ?>/images/progressbg_green.gif',
				boxImage: '<?php echo base_url(); ?>/images/progressbar.gif',
				} );
			});
			
		</script>
		<link rel="stylesheet" href="<?php echo base_url();?>/images/Refresh.css" type="text/css" />
		

<title><?php echo $this->lang->line('site'); ?></title>

	
</head>

<body>
<!-- wrap starts here -->
<div id="wrap">
		
		<!--header -->
		<div id="header">			
				
			<h1 id="logo-text"><?php echo $this->lang->line('site'); ?></span></h1>		
			<form class="search">
			<p>
				<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/english/<?php echo $pos; ?>" class="header" >English</a> | 
				<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/indonesia/<?php echo $pos; ?>" class="header" >Endonesa</a> 			
			</p>		
	           	</form>	
		</div>
		
		<!-- menu -->	
		<div  id="menu">
			<ul>    
			         <?php 
			         $current = $this->uri->segment(2);
			         $context = get_cookie('context');
			         ?>
				<li id ="<?php if($current == "vps_home"){ echo "current";}?>" ><a href="<?php echo site_url();?>/uvpanel/vps/<?php echo $context;?>"><?php echo $this->lang->line('home'); ?></a></li>
				<li id ="<?php if($current == "power"){ echo "current";}?>"><a  href="<?php echo site_url();?>/uvpanel/power/"><?php echo $this->lang->line('power'); ?></a></li>
				<li id ="<?php if($current == "system"){ echo "current";}?>"><a  href="<?php echo site_url();?>/uvpanel/system/"><?php echo $this->lang->line('system'); ?></a></li>
				<li id ="<?php if($current == "template"){ echo "current";}?>"><a  href="<?php echo site_url();?>/uvpanel/template/"><?php echo $this->lang->line('template_server'); ?></a></li>
				<li id ="<?php if($current == "support"){ echo "current";}?>"><a  href="<?php echo site_url();?>/uvpanel/support/"><?php echo $this->lang->line('support'); ?></a></li>
				<li id ="<?php if($current == "about"){ echo "current";}?>"><a  href="<?php echo site_url();?>/uvpanel/about/"><?php echo $this->lang->line('about'); ?></a></li>
				<li id ="<?php if($current == "home"){ echo "current";}?>"><a  href="<?php echo site_url();?>/uvpanel/home"><?php echo $this->lang->line('exit'); ?></a></li>
			</ul>
		</div>					