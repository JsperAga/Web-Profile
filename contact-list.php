<?php 
// echo "jasper";
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";



$to = "me@jaspercamana.com";
$subject = $_POST['radiosel']." - ".$_POST['field'];
$message = "
<html>
<head>
<title>Send Email</title>
</head>
<body>
<p>Name: ". $_POST['name']. "</p><br>
<p>Email: ". $_POST['email']. "</p><br>
<p>Address: ". $_POST['address']. "</p><br>
<p>City: ". $_POST['city']. "</p><br>
<p>Rate: ". $_POST['rate-input']. "</p><br>
<p>". $_POST['message']. "</p>
</body>
</html>


";

$headers = "From: ".$_POST['email']."\r\n";

//$headers .= "CC: cc@example.com\r\n"; // Optional CC recipients
//$headers .= "BCC: bcc@example.com\r\n"; // Optional BCC recipients

mail($to, $subject, $message, $headers);



?>

<script>
    alert('Your Form has been submitted, I will try to reply as soon as I can. <br> Thank you so much and have a good day.')
    window.location.href = 'https://profile.jaspercamana.com#contact';
</script>
