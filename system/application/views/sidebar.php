
			
		<!-- content-wrap starts here -->
		<div id="content-wrap">
				
			<div id="sidebar">
				<h1><?php echo $this->lang->line('side_sys');?></h1>
				<div class="left-box">
				                <ul class="sidemenu">				
                                       <h1><?php echo $this->lang->line('side_mem');?></h1>
                                              <?php 
                                                 $nguk = $this->sysinfo->system(); 
                                                 $total = $this->lang->line('side_mem_total');
                                                 $usage = $this->lang->line('side_mem_usage');
                                                 $free = $this->lang->line('side_mem_free');
                                                 echo "<li>$total : ".$nguk['total_mem']."Mb </li>" ;
                                                 echo "<li>Server Status : ".$nguk['stat']."</li>" ;
                                                 echo "<li>$usage : " ;?><?php echo $nguk['usage_mem'];?> Mb <br/>
                                                 <span class="progressBar" id="spaceused1" title="nguk"><?php echo $nguk['perusage'];?></span></li>
                                                 
                                                 <?php
                                                 echo "<li>$free : " ;
                                                 ?><?php echo $nguk['free_mem'];?> Mb <br/>
                                                 <span class="progressBar" id="spaceused2" title="nguk"><?php echo $nguk['perfree'];?></span></li>
                                     
                                             <h1>Virtual Server</h1>
                                            <?php 
                                                 $home = $this->lang->line('side_vs_name');
                                                 $cap = $this->lang->line('side_vs_total');
                                                 $free_space = $this->lang->line('side_vs_free');
                                                 $remain = $this->lang->line('side_vs_rem');
                                                 echo "<li>$home : ".$nguk['vs_dir']."</li>";
                                                 echo "<li>$cap: ".$nguk['vs_cap']."</li>";
                                                 echo "<li>$free_space: ".$nguk['vs_free']."</li>" ;
                                                 echo "<li>IP : ".$nguk['ip']."</li>" ;
                                            ?>
                                              <h1><?php echo $this->lang->line('side_proc');?></h1>
                                            <?php 
                                                 $home = $this->lang->line('side_proc_total');
                                                 $most = $this->lang->line('side_proc_most');
                                                 $proc = $this->lang->line('side_cpu_load');
                                                 $remain = $this->lang->line('side_vs_rem');
                                                 echo "<li>$home : ".$nguk['total_proc']."</li>";
                                                 echo "<li>$most: ".$nguk['most_proc']."</li>";
                                                 ?>
                                                 <?php
                                                 echo "<li>$proc : " ;
                                                 ?><span class="progressBar" id="spaceused3" title="nguk"><?php echo $nguk['per_cpu'];?></span></li>
                                                 
                                            
							
				</ul>	

				</div>		
						
			</div>
				