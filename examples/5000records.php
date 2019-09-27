<?php
require_once '../LZFakeTextGenerator.php';
$FAKE = new LZFakeTextGenerator;

echo "<h2>Example: Generate 5000 records for database</h2>";
foreach (range( 1, 5000) as $key => $value) {

    $id          = $value;
    $name        = $FAKE->get_name();
    $last_name   = $FAKE->get_lastname();
    $salary      = $FAKE->get_decimal(400,2800);
    $user        = $FAKE->get_username();
    $pass        = $FAKE->get_password();
    $email       = $FAKE->get_email();
    $credit_card = $FAKE->get_credit_card();
    $ip_register = $FAKE->get_ip();

    echo "<br />";
    echo "INSERT into TABLENAME values( $id, '$name', '$last_name', '$salary', '$user', '$pass', '$email', '$credit_card', '$ip_register' )";
}