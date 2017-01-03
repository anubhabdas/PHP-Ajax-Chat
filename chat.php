<?php
	include 'blogic.php';
		$qry = "select * from chat order by id desc";
		$res = ExecuteQuery($qry);
		while($r = mysql_fetch_array($res)) :
?>
	<div id="chat_data">
		<span style="color: green;"><?php echo $r[1];?>:</span>
		<span style="color: brown;"><?php echo $r[2];?></span>
		<span style="float: right;"><?php echo formatDate($r['date']);?></span>	
	</div>
<?php endwhile;?>	