<?php

$name = $_POST['name'];
$work = $_POST['work'];
$prob = $_POST['prob'];

if ( empty( $name ) || empty( $work ) || empty( $prob ) ) {
    echo 'Please fill All Fields';
} else {
    mail( 'chivukula.t7@gmail.com', 'Teja', $prob, "From $name <$work>" );
    echo "<script type='tect/javascript'>alert('success');
    window.history.log( -1 );</script>";

}
?>