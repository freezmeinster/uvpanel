
			<div id="main">
			<h1><?php echo $this->lang->line('power'); ?></h1>
                        <div id="stop" style="display: none;">
                        Asli nih mau di matiin ?<br/><br/>
                        <button onclick="jQuery.facebox({ ajax : '../about' });">Fuck</button>
                        <button onclick="jQuery.facebox.close();">Batal</button>
                        </div>
			<p>
                        <button onclick="jQuery.facebox({ div : '#stop' });" class="ui-button">Restart</button>
                        <button onclick="jQuery.facebox({ div : '#stop' });" class="ui-button">Stop</button>
			</p>
			</div>
		
		</div>
					
		