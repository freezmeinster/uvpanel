<script type="text/javascript">

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
			<input class="submit" type="submit" value="Submit"/>
			</p>

			</fieldset>
			</form>

			</div>
		
		</div>
					
		