                       <?php $nguk = $this->sysinfo->system(); ?>
			<div id="main">
			<h1><?php echo $this->lang->line('template_header'); ?></h1>

			<p>
			  <?php echo $this->lang->line('template_content'); ?>
			  <table>
			  <tr>
			    <td>
			     <table>
			      <form action="<?php echo site_url();?>/lib_uvpanel/req_template/<?php echo $nguk['vs_dir']?>" method="POST">
			       <input type="hidden" name="server" value="apache">
			       <input type="submit" value="Apache Server">
			      </form>
			    </table>
			    </td>
			    <td>
			     <table>
			      <form action="<?php echo site_url();?>/lib_uvpanel/req_template/<?php echo $nguk['vs_dir']?>" method="POST">
			       <input type="hidden" name="server" value="mysql">
			       <input type="submit" value="Mysql Server">
			      </form>
			    </table>
			    </td>
			    <td>
			     <table>
			      <form action="<?php echo site_url();?>/lib_uvpanel/req_template/<?php echo $nguk['vs_dir']?>" method="POST">
			       <input type="hidden" name="server" value="proftpd">
			       <input type="submit" value="FTP Server">
			      </form>
			    </table>
			    </td>
			     <td>
			     <table>
			      <form action="<?php echo site_url();?>/lib_uvpanel/req_template/<?php echo $nguk['vs_dir']?>" method="POST">
			       <input type="hidden" name="server" value="php">
			       <input type="submit" value="PHP CGI">
			      </form>
			    </table>
			    </td>
			  </tr>
			  <tr>
			    <td>
			     <table>
			      <form action="<?php echo site_url();?>/lib_uvpanel/req_template/<?php echo $nguk['vs_dir']?>" method="POST">
			       <input type="hidden" name="server" value="samba">
			       <input type="submit" value="SAMBA">
			      </form>
			    </table>
			    </td>
			  </tr>
			  </table>
			</p>
			</div>
		
		</div>
					
		