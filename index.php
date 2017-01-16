<?php 
	if ($_GET) {
		$page = 'pages/' . $_GET['page'] . '.php';
		$_page = $_GET['page'];
	} else {
		$page = 'pages/main.php';
		$_page = 'main';
	}
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <title></title>
  <script type="text/javascript">

    function AjaxFormRequest(result_id,form_id,url) {
      $.ajax({
      url:       url, 
      type:     "POST",
      dataType: "html",
      data: $("#"+form_id).serialize(), 
      success: function(response) {
          document.getElementById(result_id).innerHTML = response;
        },
      error: function(response) {
          document.getElementById(result_id).innerHTML = "Помилка відправки форми";
        }
      });
    }
    
//    var partElem = '<input type="text" size="100" name="party[]"></br>';

  	$(document).ready(function(){

    	$('.menuitem').removeClass('active-item');
    	$(<?php echo "'#".$_page."'" ?>).addClass('active-item');

// ----------- Task 4  -----------
    	$('#part-input').keydown(function(){$('#part-count').empty();});

    	$('#part-input').keyup(function(){
    		for (var i = 1; (i <= Number($('#part-input').val())) ; i++) {
    			$('#part-count').append('</br>Графіки проведення страйків Партіі № ' + i + ' ' + '<input type="text" size="100" name="party['+i+']'+i+'"></br>');
    		};
    	});


	});
  </script>
 </head>
 
 <body>
 	<div id="back" class="clear">
 		<div id="top"  class="clear">
 		</div>
 		<div id="middle"  class="clear">
 			<div id="left" class="clear">
 				<div id="logo"  class="clear">
 					<img src="img/logo.png">
 				</div>
 				<div id="left-menu" class="clear">
 					<a id="task1" class="menuitem" href="index.php?page=task1">Завдання 1</a>
 					<a id="task2" class="menuitem" href="index.php?page=task2">Завдання 2</a>
 					<a id="task3" class="menuitem" href="index.php?page=task3">Завдання 3</a>
 					<a id="task4" class="menuitem" href="index.php?page=task4">Завдання 4</a>
 					<a id="task5" class="menuitem" href="index.php?page=task5">Завдання 5</a>
 					<a id="task6" class="menuitem" href="index.php?page=task6">Завдання 6</a>
 				</div>
 			</div>
 			<div id="right">
 				<div id="top-menu" class="clear">
 					<a id="main" class="menuitem" href="index.php?page=main" class="active-item">Головна</a>
 					<a id="about" class="menuitem" href="index.php?page=about">Автор</a>
 					<a id="soft" class="menuitem" href="http://www.softgroup.ua/" target="_blanc">Soft Group</a>
 				</div>
 				<div id="content" class="clear">
 					<?php include $page; ?>
 				</div>
 			</div>
 		</div>
 		<div id="bottom"  class="clear">
 		</div>
 	</div>
 </body>
</html>