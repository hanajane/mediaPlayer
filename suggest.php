<?php 
//Import the PHPmailer into the global namespace
    use PHPMailer\PHPMailer\PHPMailer;
    require 'vendor/phpmailer/src/PHPMailer.php';
    require 'vendor/phpmailer/src/Exception.php';
    require 'vendor/phpmailer/src/SMTP.php';

    // var_dump($_POST); //checks the data

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $name   = trim(filter_input(INPUT_POST,"userFullName",FILTER_SANITIZE_STRING));
        $email  = trim(filter_input(INPUT_POST,"userEmail",FILTER_SANITIZE_EMAIL));
        $details =trim(filter_input(INPUT_POST,"details",FILTER_SANITIZE_SPECIAL_CHARS));

        if (trim($name) == "" || $email == "" || $details =="" )
        {
            $isModal = true;

            echo "Please fill in the required fields: Full Name, Email and Details";
            exit;
        }
        if ($_POST["forEvilBots"] != "")
        {
            echo "Bad form input";
            exit;
        }
        if (!PHPMailer::validateAddress($email)) // checkes if the email add is valid
        {
            echo "Invald email address.";
            exit;
        }

        // echo "<pre>"; // this element does the same as <br /> but the whole block
        $email_body = "";
        $email_body .= "Name " . $name . "\n";
        $email_body .= "Email " . $email . "\n";
        $email_body .= "Details message ". $details . "\n";
        // echo "</pre>";

        $mail = new PHPMailer;
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 2;
        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';
        // use
        // $mail->Host = gethostbyname('smtp.gmail.com');
        // if your network does not support SMTP over IPv6
        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;
        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        //Username to use for SMTP authentication - use full email address for gmail
        $mail->Username = "propsjane@gmail.com";
        //Password to use for SMTP authentication
        $mail->Password = "jadcpzmdcwpaqmmf";

        //It's important not to use the submitter's address as the from address as it's forgery,
        //which will cause your messages to fail SPF checks.
        //Use an address in your own domain as the from address, put the submitter's address in a reply-to
        $mail->setFrom('propsjane@gmail.com', $name);
        $mail->addReplyTo($email, $name);
        $mail->addAddress('propsjane@gmail.com', 'Jane');
        $mail->Subject = 'Library suggestion from ' . $name;
        $mail->Body = $email_body;
        if (!$mail->send())
        {
            // $msg .= "Mailer Error: " . $mail->ErrorInfo; ewan bat pinalitan
            echo "Mailer Error : " . $mail->ErrorInfo;
            exit;
        } 
        header("location:suggest.php?status=thanks");
    }

?>
<?php
    $pageTitle = "Suggest media title";
    $section = "suggest";

    include 'includes/header.php'; ?>
        <div class="section page">
            <h1>Suggest a media item.</h1>
            <?php
                //this part is somehow useless as i already added the require attribute to the frontend. but whatevs haha!
                if (isset($_GET["status"]) && $_GET["status"] == "thanks")
                        {
                            echo "<h1> Thank You!</h1>
                            <p>Thanks for the email! I&rsquo;ll check out your suggestion shortly!</p>";
                            exit;
                        }
                        else // else the form will be displayed again. should just dispaly either one... the thank you message OR the form
                        { 
            ?>
            <p>If you think there is something I&rsquo;m missing, let me know!<br />Complete the form to send an email. </p>
        <form method = "POST" action="suggest.php">
            <table>
                <tr>
                    <th><label for="name">Name</label></th>
                    <td><input type="text" name="userFullName" id="userFullName" class="userFullName" required /></td>
                </tr>
                <tr>
                    <th><label for="email">Email</label></th>
                    <td><input type="text" name="userEmail" id="userEmail" class="userEmail" required /></td>
                </tr>
                <tr>
                    <th><label for="details">Suggest item detail</label></th>
                    <td><textarea  name="details" id="details" class="details" required></textarea></td>
                </tr>
                <tr class="forEvilBots" style="display:none;"> <!-- this extra field is for evil robots! they dont use browsers so they jus fill in all the fields that come along thier way. if this gets filled, evil bot gets kicked out the program ;) -->
                    <th><label for="forEvilBots">Code</label></th>
                    <td><input  name="forEvilBots" id="forEvilBots" >
                    <p> Please leave this field blank. </p></td>
                </tr>
            </table>
            <input type="submit" value="Send"/>
                        <?php } ?>
        </form>
        </div>
<?php include 'includes/footer.php'; ?>
