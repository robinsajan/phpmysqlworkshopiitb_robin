<html>

<form action='q2_send_email.php' method=POST>
	NAME     ::<input type="text" name="name"><br><br>
	EMAIL    ::<input type="text" name="e_mail"><br><br>
	FEEDBACK ::<textarea name='feedback' maxlength="=300"></textarea><p>
	<input type="submit" name="Done">
</form>
</html>

<?php
if(isset($_POST["submit"]))
{
$name=$_POST['name'];
$to=$_POST['e_mail'];
$admin="robinsajan@gmail.com";
$body=$_POST['feedback'];
$body1="thank you for the feedback";
if ($name and $to and $body)
{
$subj="Thank you for feedback";
$subject2="feedback from ".$name;
$header="From: robinsajan4@gmail.com";

mail($to, $subj, $body1,$header);
mail($admin,$subjec2,$body,$header);
echo "Mail sent successfully";
}
else{
	die("ENTER NAME AND Email ID");
}
}
?>