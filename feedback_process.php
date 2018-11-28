<?php

print_r($_POST);
$name_error = $email_error = $feedback_error = "";
$name = $email = $feedback = $success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $name_error = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $name_error = "Only letters and spaces allowed";
        }
    }
    
    if (empty($_POST["email"])) {
        $email_error = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email_error = "Invalid email format";
        }
    }
    
    if (empty($_POST["feedback"])) {
        $feedback_error = "Message required to submit feedback";
    } else {
        $feedback = test_input($_POST["feedback"]);
    }

    if ($name_error == '' and $email_error == '' and feedback_error == ''){
        $message = '';
        unset($POST['submit']);
        foreach ($POST as $key => $value){
            $message .= "key: $value\n";
        }
        $mailTo = 'tweels@me.com';
        $subject = 'Web Feedback';
        if (mail($mailTo, $subject, $feedback)) {
            $success = "Message sent successfully! Thank you for your feedback!";
            $name = $email = $feedback = '';
        }
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>