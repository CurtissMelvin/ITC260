	 <?php
	 /*
	 * 
	 * @package ITC260
	 * @author Curtiss <curtissm@hotmail.com>
	 * @version 1.0 2015/06/16 
	 * @link http://www.curtissmelvin.com
	 * @license http://www.apache.org/licenses/LICENSE-2.0
	 * @Passphrase Assignment A3:
	 */

	
	if(session_status() == PHP_SESSION_NONE || session_id == "") {
		session_start();
	}

	if(!isset($_SESSION['login'])) {
		$_SESSION['login'] = false;
	}
	 
	 $pw = "abc123";
	 
	 if($_POST) {
		 IF($_POST['password'] == $pw) {
			 $_SESSION['login'] = true;
		 }else {
			 echo "Wrong password!";
		 }
	 }
	 
	 if(!$_SESSION["login"]) {
		 echo '
		 <!DOCTYPE html>
		 <html>
		 <body>
			<form action="index.php" method="post">
				<input type="text" name="password"><br />
				<input type="submit" value="submit" />
			</form>
		 </body>
		 </html>
		 ';
		 exit;
	 }
	 
	 ?>
	 
