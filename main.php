<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Form Page</title>
    <link rel="stylesheet" href="style.css">

     


<body>
    <div class="form-container">
        <h2>Contact Us</h2>
        <form method="post">
            <label for="name">Full Name</label>
            <input type="text" id="name" placeholder="Enter your name" required>

            <label for="email">Email</label>
            <input type="email" id="email" placeholder="Enter your email" required>

            <label for="message">Message</label>
            <textarea id="message" rows="4" placeholder="Type your message" required></textarea>
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_template" value="basic">
            <button type="submit">Submit</button>
            <?php if(!empty($message)) { ?>
                <div>
                    <strong><?php echo $message; ?></strong>
                </div>
                <?php } ?>

        </form>
    </div>
</body>
<head>

<?php
if(!empty($_POST ["send"])) {
    $userName = $_POST["userName"];
    $userName = $_POST["userEmail"];
    $userName = $_POST["userMessage"];
    $toEmail = $_POST["adeolashittu399@gmail.com"]

    $mailHeaders = "Name: " . $userName .
    "\r\n Email: " . $userEmail .
    "\r\n Email: " . $userMessage . "\r\n";

    if(mail ($toEmail, $userName, $mailHeaders)){
        $message = "Your Information is received successfully.";
    }
}
?>

