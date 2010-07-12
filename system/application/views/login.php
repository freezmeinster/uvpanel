<html>
<head>
  <title>
    Uvpanel, Vmin User Panel
  </title>
  <link type="text/css" href="<?php echo base_url();?>images/ui-lightness/jquery-ui-1.8.custom.css" rel="stylesheet" />
  <link rel="stylesheet" href="<?php echo base_url();?>/images/Refresh.css" type="text/css" />
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery-ui-1.8.custom.min.js"></script>
</head>
<body onload="showLoginForm(); return false;" style="background: #CCCCCC;">
<p align="right">
<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/english/login" class="header">English</a> | 
<a href="<?php echo site_url();?>/lib_uvpanel/set_lang/indonesia/login" class="header">Endonesa</a> 			
</p>
<p align="center">
<?php echo $this->lang->line('login_message'); ?>
</p>

<div id="login-dialog" title="<?php echo $this->lang->line('login_please'); ?>" style="display:none;">
  <?php 
  $at = array('id' => 'form-login');
  echo form_open('lib_uvpanel/check',$at); 
  ?>
   <table align="center">
    <tr><td><?php echo $this->lang->line('login_user'); ?></td> <td>:</td> <td><input type="text" name="username" /></td></tr>
    <tr><td><?php echo $this->lang->line('login_pass'); ?></td> <td>:</td> <td><input type="password" name="password" /></td></tr>
    </table>
  </form>
</div>
<script type="text/javascript">
  function showLoginForm(){
    $("#login-dialog").dialog({
      show:'shake',
      hide:'explode',
      draggable: false,
      width: 460,
      resizable: false,
      closeOnEscape: false,
      buttons : {
	"Login" : function(){
		    $("#form-login").submit();
		  },
	
         "<?php echo $this->lang->line('login_reg'); ?>" : function(){
		     window.location.replace("<?php echo $this->config->item('vmin_path');?>index.php/vmin/user_reg");

		  }
      }
    });
    $( "#login-dialog" ).dialog({
        close: function() {
        window.location.replace("<?php echo site_url();?>/uvpanel/login");
        }
    });
  }
</script>
</body>
</html>
