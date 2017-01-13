  <script type="text/javascript">
  	$(document).ready(function(){
    	console.log('jQuery OK!');
    	$('.menuitem').removeClass('active-item');
    	$(<?php echo "'#".$_page."'" ?>).addClass('active-item');
	});
  </script>