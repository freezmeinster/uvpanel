                        <?php $nguk = $this->sysinfo->system(); ?>
			<div id="main">
			<h1><?php echo $this->lang->line('power'); ?></h1>
			<div id="shutdown" style="display: none;">
                        <?php echo $this->lang->line('system_shutdown_message'); ?><br/><br/>
                        <button onclick="jQuery.facebox({ ajax : '../../lib_uvpanel/req_shutdown/<?php echo $nguk['vs_dir']?>' });"><?php echo $this->lang->line('system_shutdown'); ?></button>
                        </div>
			<div id="restart" style="display: none;">
                        <?php echo $this->lang->line('system_restart_message'); ?><br/><br/>
                        <button onclick="jQuery.facebox({ ajax : '../../lib_uvpanel/req_restart/<?php echo $nguk['vs_dir']?>' });"><?php echo $this->lang->line('system_restart'); ?></button>
                        </div>
			<p>
			<?php echo $this->lang->line('power_header'); ?>
                        </p>
			<p>
                        <button onclick="jQuery.facebox({ div : '#restart' });" class="ui-button"><?php echo $this->lang->line('system_restart'); ?></button>
                        <button onclick="jQuery.facebox({ div : '#shutdown' });" class="ui-button"><?php echo $this->lang->line('system_shutdown'); ?></button>
			</p>
			</div>
		
		</div>
					
		