<?php
if ( isset( $_POST['submit'] ) ) {
    $name = $_POST['name'];
    $email = 'chivukula.t7@gmail.com';
    $work = $_POST['work'];
    $msg = $_POST['prob'];

    $to = 'chivukula.t7@mail.com';
    // Receiver Email ID, Replace with your email ID
    $subject = 'Form Submission';
    $message = 'Name :'.$name.'\n'.'Phone :'.$work.'\n'.'Wrote the following :'.'\n\n'.$msg;
    $headers = 'From: '.$email;

    if ( mail( $to, $subject, $message, $headers ) ) {
        echo '<h1>Sent Successfully! Thank you'.' '.$name.', We will contact you shortly!</h1>';
    } else {
        echo 'Something went wrong!';
    }
}
?>