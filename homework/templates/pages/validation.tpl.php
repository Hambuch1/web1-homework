<?php
if(!isset($_POST['name']) || strlen($_POST['name']) < 5)
{
exit("Wrong name: ".$_POST['name']);
}
$re = '/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/';
if(!isset($_POST['email']) || !preg_match($re,$_POST['email']))
{
exit("Wrong email: ".$_POST['email']);
}
if(!isset($_POST['textarea']) || empty($_POST['textarea']))
{
exit("Wrong text: ".$_POST['textarea']);
}
?>
<h1><?php echo $_POST['name']?></h1>
<hr>
<h1><?php echo $_POST['email']?></h1>
<hr>
<h1><?php echo $_POST['textarea']?></h1>