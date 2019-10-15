<?php
    if(!isset($_POST['submit']))
    {
        // This page should not be accessed directly. Need to submit the form //
        echo "Whoops! You need to submit the form!";
    } 
    // COLLECT //
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['message'];

    // VALIDATION //
    if(empty($name)||empty($visitor_email)) 
    {
        echo "Please enter your name and email.";
        exit;
    }

    $email_from = 'sparrow.marino@gmail.com'; // Put your email address here
    $email_subject = "New Form Submission";
    $email_body = "You have received a new message from the user $name.\n.";