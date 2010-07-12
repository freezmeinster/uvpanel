
			<div id="main">
			<h1><?php echo $this->lang->line('power'); ?></h1>
			<div id="stop" style="display: none;">
                        Asli nih mau di matiin ?<br/><br/>
                        <button onclick="jQuery.facebox({ ajax : '../about' });">Fuck</button>
                        <button onclick="jQuery.facebox({ ajax : '../about' });">Batal</button>
                        </div>
			<div id="restart" style="display: none;">
                        Asli nih mau di restart ?<br/><br/>
                        <button onclick="jQuery.facebox({ ajax : '../about' });">Fuck</button>
                        <button onclick="jQuery.facebox({ ajax : '../about' });">Batal</button>
                        </div>
			<p>
			<?php echo $this->lang->line('power_header'); ?>
                        </p>
			<p>
                        <button onclick="jQuery.facebox({ div : '#restart' });" class="ui-button">Restart</button>
                        <button onclick="jQuery.facebox({ div : '#stop' });" class="ui-button">Stop</button>
			</p>
			</div>
		
		</div>
					
		