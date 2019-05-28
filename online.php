<?php
session_start();
include("isdk.php");
$name 		= 	$_POST['name'];
$email		= 	$_POST['email'];
$phone 		= 	$_POST['phone'];
$_SESSION['total']= '9997';
//var_dump($total);

$app = new iSDK;
if ($app->cfgCon("connectionName")) 
{
	
	$contactId = $app->addWithDupCheck(array('FirstName' => $name, 'Email' => $email,'Phone1' => $phone), 'Email');
	$_SESSION["contactId"]	= 	$contactId;
	
	$_SESSION["name"]	=	$name;
	$_SESSION["email"]	=	$email;
	$_SESSION["phone"]	=	$phone;

	
	
	$groupId = 13607; 					// Registration speaktofortune.com/payment/
	$result = $app->grpAssign($contactId, $groupId);
   	
	
}
?> 

<form method="post" name="customerData" action="Checkout1.php">
    <input type="hidden" value="<?php echo $_SESSION['total']; ?>" name="amount" />
</form>
<script language='javascript'>document.customerData.submit();</script> 