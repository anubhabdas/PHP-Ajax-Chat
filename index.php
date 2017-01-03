<?php
	include 'blogic.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat System is Php</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" media="all" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<script>
		function ajax(){
		
		var req = new XMLHttpRequest();
		
		req.onreadystatechange = function(){
		
		if(req.readyState == 4 && req.status == 200){
		
		document.getElementById('chat').innerHTML = req.responseText;
		} 
		}
		req.open('GET','chat.php',true); 
		req.send();
		
		}
		setInterval(function(){ajax()},1000);

		function playSound(filename){   
                document.getElementById("sound").innerHTML='<audio autoplay="autoplay"><source src="' + filename+'.wav" type="audio/wav"/><embed hidden="true" autostart="true" loop="false" src="' + filename +'.wav"/></audio>';
            }
	</script>
</head>
<body onload="ajax();">

<div class="page-header">
  <h1 class="animated shake" style="color:black;"><center>Introducing&nbsp;<b><em>Web&nbsp;</em></b>Chat&lt;3</center></h1>
</div>
<div class="col-xs-12 col-xs-offset-4" style="margin-top: 2%; margin-bottom: 10%; width: 40%;">
	<div class="panel panel-primary">
	<div class="panel-heading">
    	<h3 align="center" class="panel-title">Web Chat</h3>
  	</div>
  	
   	<div class="panel-body">
  		<div id="container-fluid">
  		<div class="back well">
			<div id="chat_box" class="tab-pane container-fluid">
				<div id="chat"></div>
			</div>
		</div>
			<div class="container-fluid">
			<form method="post" action="index.php">
				<input type="text" name="name" placeholder="Enter Name"><br><br>
				<textarea name="msg" placeholder="Enter message" cols="8"></textarea><br><br>
				<button type="submit" class="btn btn-primary btn-lg btn-block" align="center" name="submit">Send<span style="float: right;" class="glyphicon glyphicon-ok"></span></button><br> 
			</form>
			</div>
			<?php
			if(isset($_POST['submit'])){
				$name = $_POST['name'];
				$msg = $_POST['msg'];
				$qry = "INSERT INTO chat(name,msg) values('$name','$msg')";
				$r = ExecuteNonQuery($qry);
				if($r){
				//	//echo "<embed loop='false' src='chat.wav' hidden='true' autoplay='true'/>";
				}
			}
			?>
		</div>
	</div>
	</div>
	</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>