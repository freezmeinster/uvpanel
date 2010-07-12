<?php
class Sysinfo extends Model {

    function Sysinfo()
    {
        parent::Model();
        $this->load->model('gui_uvpanel');
    }
    function system(){
             $con=get_cookie('context');
             $vps=$this->gui_uvpanel->remote_sysinfo($con,'vps_name');
             $total = $this->gui_uvpanel->remote_sysinfo($con,'total_memory');
             $data['total_mem'] = floor($total / 250);
             $total = $data['total_mem'];
             $data['usage_mem'] = $this->gui_uvpanel->remote_sysinfo($con,'usage_memory');
             $usage = $data['usage_mem'];
             $data['free_mem'] = $total-$usage;
             $fmem = $data['free_mem'];
             $tmem = $data['total_mem'];
             $umem = $data['usage_mem'];
             $data['perfree'] = floor(($fmem * 100) / $tmem);
             $data['perusage'] = floor(($umem * 100) / $tmem);
             $data['vs_free'] = $this->gui_uvpanel->remote_sysinfo($con,'disk_free');
             $data['vs_dir'] = $vps;
             $data['vs_cap'] = $this->gui_uvpanel->remote_sysinfo($con,'disk_cap');
             $freedsk= $this->gui_uvpanel->remote_sysinfo($con,'disk');
             $data['vs_max'] = floor($freedsk / 500);
            
            $lang = get_cookie('lang');
             if ( $lang == "" ){
                  $lang = "english";
             }
                   if ( $lang == "english"){
                      if (floor(($fmem * 100) / $tmem) <= 20){
                          $data['stat'] = "Server is dying !!";
                      } else if ((floor(($fmem * 100) / $tmem) >= 20) && (floor(($fmem * 100) / $tmem) <= 60)){
                          $data['stat'] = "Server is Sick !";
                      } else if (floor(($fmem * 100) / $tmem) >= 60 ){
                          $data['stat'] = "Server is health";
                      }  
                   } else if ($lang == "indonesia"){
                     if (floor(($fmem * 100) / $tmem) <= 20){
                          $data['stat'] = "Server sekarat !!";
                      } else if ((floor(($fmem * 100) / $tmem) >= 20) && (floor(($fmem * 100) / $tmem) <= 60)){
                          $data['stat'] = "Server sakit !";
                      } else if (floor(($fmem * 100) / $tmem) >= 60 ){
                          $data['stat'] = "Server sehat";
                      }  
                   }
            
              $data['total_proc'] = $this->gui_uvpanel->remote_sysinfo($con,'total_proc');
              $data['most_proc'] = $this->gui_uvpanel->remote_sysinfo($con,'most_proc');
              $data['per_cpu'] = $this->gui_uvpanel->remote_sysinfo($con,'per_cpu');
              $data['ip'] = $this->gui_uvpanel->remote_sysinfo($con,'ip');
              return $data;
         }
}

?>
