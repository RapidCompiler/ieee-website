<?php 
if(isset($_POST['submit'])){
    $to = "cyansus94@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name']
    $subject = "Form submission";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $headers = "From:" . $from;
    $result = @mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>