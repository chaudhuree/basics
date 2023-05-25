<?php
//mail('mail@gmail.com','Testing','this is just a test to check localhost email ','From: mail@gmail.com');
$emailTo="mail@gmail.com";
 $subject="testing";
 $body="lets check its working or not using better variable way";
 $headers="From:mail@gmail.com";
     if (mail($emailTo, $subject, $body, $headers)) {
                echo "Mail sent successfully!";
                    } else {
                                echo "Mail not sent!";
                    }
?>