<?php

$name = $_REQUEST['name'];
$work = $_REQUEST['work'];
$prob = $_REQUEST['prob'];

if ( empty( $name ) || empty( $work ) || empty( $prob ) ) {
    echo 'Please fill All Fields';
} else {
    mail( 'chivukula.t7@gmail.com', 'Teja', $prob, "From $name <$work>" );
    echo "<script type='tect/javascript'>alert('success');
    window.history.log( -1 );</script>";

}
?>