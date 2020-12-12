<?php $productCode = $_POST['productCode'];
$email = $_POST['email'];
$name = $_POST['name'];
$number = $_POST['number'];
$quantity = $_POST['quantity'];
$formcontent = "From: $name \n Number: $number \n Product Code: $productCode \n Product Quantity: $quantity";
$recipient = "sales@29luxury.com";
$subject = "Quote Request";
$mailheader = "From: $email \r\n";
$user = "$email";
$usersubject = "Confirmation Message";
$userheaders = "From: sales@29luxury.com\n";

$usermessage = "Thank you for requesting a quote. We'll get back to you shortly.";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
mail($user, $usersubject, $usermessage, $userheaders);
header("Location: thanks.html");
echo "Thank You"

?>
