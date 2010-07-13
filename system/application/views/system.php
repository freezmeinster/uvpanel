<script type="text/javascript">
$.validator.setDefaults({
	submitHandler: function() { 
       	  $('#changepass').ajaxForm({ 
          target: '#done', 
          success: function() { 
            $('#done').fadeIn(2000);
            $('#done').fadeOut(5000); 
        } 
    }); 
   }
});

$().ready(function() {
	$("#changepass").validate({
		rules: {
			password: {
				required: true
			},
			confirm_password: {
				required: true,
				equalTo: "#password"
			}
		},
		messages: {
			password: {
				required: "Please enter a new password",
			},
			confirm_password: {
				required: "Please enter a new password",
				equalTo: "Please enter the same password as above"
			}
		}
	});
	
});
</script>

<script type="text/javascript">
$(document).ready(function() { 

    $('#changemem').ajaxForm({ 
        target: '#done', 
        success: function() { 
            $('#done').fadeIn(1500);
            $('#done').fadeOut(5000); 
        } 
    }); 
});
</script>




			<div id="main">
			<h1><?php echo $this->lang->line('system'); ?></h1>		
			<p>
			<?php echo $this->lang->line('system_header'); ?>
                        </p>
			<form class="cmxform" id="changepass" method="POST" action="<?php echo site_url();?>/lib_uvpanel/change_vps_pass">
			<fieldset>
			<legend><?php echo $this->lang->line('system_changepass'); ?></legend>
			<p>
			<label for="password">Password</label>
			<input id="password" name="password" type="password" />
			</p>

			<p>
			<label for="confirm_password">Confirm password</label>
			<input id="confirm_password" name="confirm_password" type="password" />
			</p>
		
			<p>
			<input class="submit" type="submit" value="<?php echo $this->lang->line('create_edit'); ?>"/>
			</p>

			</fieldset>
			</form>
			
			<form class="cmxform" id="changemem" method="POST" action="<?php echo site_url();?>/lib_uvpanel/change_vps_mem">
			<fieldset>
			<legend><?php echo $this->lang->line('system_changemem'); ?></legend>
			<p>
			<label for="password">Password</label>
			<select name="mem" id="mem">
			  <option value="16">16 Mb</option>
			  <option value="32">32 Mb </option>
			  <option value="64">64 Mb</option>
			  <option value="128">128 Mb</option>
			  <option value="256">256 Mb</option>
			  <option value="512">512 Mb</option>
			</select>
			</p>
			<p>
			<input type="submit" name="submit" class="submit" value="<?php echo $this->lang->line('create_edit'); ?>"/>
			</p>

			</fieldset>
			</form>
                        <div id="done" style="display:none; font-size: 20px;"></div>
			</div>
		
		</div>
					
		