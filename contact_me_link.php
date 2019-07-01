<?php 
if($_POST["submit"]) {
    $recipient="devion9@gmail.com";
    $subject="Someone sent contact information from your website";
    $name=$_POST["name"];
    $email=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $name\nEmail: $email\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $name <$email>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>





<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/png" href="images/DB_website_logo_4.png">
    <link href="github_link.html">
    <link href="lnkedin_page_tab.html">
    <link href="index.html">
    <link href="contact_me_link.php">
    <title> Devion Buchynsky Personal Website</title>
</head>

<body>
    <!--reference to the javascript file in the js folder -->
    <script type="text/javascript" src="js/index4.js">
    </script>
    <div id="console">
    </div>

    <?=$thankYou ?>

    <div class="container" id="console">
        <form id="contact" action="" method="post">

            <h4>If you contact me today, I'll try to reply within 24 hours.</h4>
            <fieldset>
                <input placeholder="Your name" type="text" tabindex="1" name="name" required autofocus>
            </fieldset>
            <fieldset>
                <input placeholder="Your Email Address" type="email" tabindex="2" name="email" required>
            </fieldset>
            <fieldset>
                <textarea placeholder="Type your Message Here...." tabindex="5" name="message" required></textarea>
            </fieldset>
            <fieldset>
                <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
            </fieldset>
        </form>


    </div>
</body>

</html>