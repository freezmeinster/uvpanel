<head>
  <title>
    Sorry Your VPS was not started 
  </title>
  <link type="text/css" href="<?php echo base_url();?>images/ui-lightness/jquery-ui-1.8.custom.css" rel="stylesheet" />
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery.js"></script>
  <script type="text/javascript" src="<?php echo base_url();?>images/js/jquery-ui-1.8.custom.min.js"></script>
</head>
<body onload="show(); return false;" style="background: #CCCCCC;">
<div id="dialog" title="Opps!" style="display:none;">
   <p>
     <?php echo $this->lang->line('context_error');?>
   </p>
</div>
<script type="text/javascript">
  function show(){
    $("#dialog").dialog({
      show:'bounce',
      hide:'explode',
      draggable: false,
      width: 460,
      resizable: false,
      closeOnEscape: false,
     
    });
    $( "#dialog" ).dialog({
        close: function() {
        window.location.replace("<?php echo site_url();?>/uvpanel/home");
        }
    });
  }
</script>
</body>
</html>