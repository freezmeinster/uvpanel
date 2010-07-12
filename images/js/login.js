$(document).ready(function() {
		var $loading = $('<img src="/images/loading.gif" alt="loading" class="loading">');
		

		$('#vps_list td a.help').each(function() {
			
		       var $dialog = $('<div></div>').append($loading.clone());
				
					
			var $link = $(this).one('click', function() {
				$dialog
					.load($link.attr('href') + ' #content')
					.dialog({
						title: $link.attr('title'),
						height: 150,
						width: 400,
						show: 'puff',
						hide: 'explode',
						draggable: false,
						resizable: false,
						modal: true,
						
					});

				$link.click(function() {
				$dialog.dialog('open');
					return false;
				});

				return false;
			});
		});
		
	});


$(function() {
		$("#tabs").tabs({
		fx: { opacity: 'toggle' },
		width: 500
		});
		
		$("#vps_help").dialog({
			autoOpen: false,
			height: 300,
			width: 500,
			show: 'puff',
			hide: 'explode',
			draggable: false,
			resizable: false,
			modal: true
		});
		
		
		$("#user_profile").dialog({
			autoOpen: false,
			height: 300,
			width: 500,
			show: 'puff',
			hide: 'explode',
			draggable: false,
			resizable: false,
			modal: true
		});
              
                $("#user_pass").dialog({
			autoOpen: false,
			height: 200,
			width: 450,
			show: 'puff',
			hide: 'explode',
			draggable: false,
			resizable: false,
			modal: true
		});
		
		$("#vps").dialog({
			autoOpen: false,
			height: 220,
			width: 460,
			show: 'puff',
			hide: 'explode',
			draggable: false,
			resizable: false,
			modal: true
		});
		
		 $("#support").dialog({
			height: 300,
			autoOpen: false,	      
			width: 500,
			show: 'puff',
			hide: 'explode',
			draggable: false,
			resizable: false,
			modal: true
		});
		
		$("#del_mess").dialog({
			height: 100,
			autoOpen: false,	      
			width: 300,
			show: 'puff',
			hide: 'explode',
			draggable: false,
			resizable: false,
			modal: true
		});
		
	        $('#edit-user')
			.button()
			.click(function() {
				$('#user_profile').dialog('open');
			});
	        $('#edit-pass')
			.button()
			.click(function() {
				$('#user_pass').dialog('open');
			});
		$('#order-vps')
			.button()
			.click(function() {
				$('#vps').dialog('open');
			});
		
	
	});          

function support(){
 
          $('#support').dialog('open');
};

function del_mess(){
          $('#del_mess').dialog('open');
};	


