<html>

<form action='send_email.php' method ='POST'>
	Email Id <input type="text" name="email">
	<input type="submit" name="sub" value="send">
</form>

</html>

<?php
session_start();
if(isset($_POST['sub']))
{
	$email=$_POST['email'];
	$subject="MARKS";
	$body="subject 1  ::".$_SESSION['sub1']." subject 2  ::".$_SESSION['sub2']." subject 3  ::".$_SESSION['sub3'];
	$header="From: robinsajan4@gmail.com";
	if($email)
	{
		mail($email,$subject,$body,$header);
		echo "<br><br>Mail Sent Successfully";

	}
	else
	{
		die ("Enter Proper Email Id");
	}

	echo "<br><br><a href='marks.php'>click</a> here to goto marks";
	
}

?>