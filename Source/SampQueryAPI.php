<?php
    include 'Source/SAMPQueryAPI.php'
	$server = new sampQueryApi('51.83.196.236','7777');
	if($server->isOnline())
	{
		$info = $server->getInfo();
	
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" 
  "http://www.w3.org/TR/html4/strict.dtd">
<html>
 <body>
  <h2><?php echo $info['players']?>/<?php echo $info['maxplayers']?>
 </body> 
</html>