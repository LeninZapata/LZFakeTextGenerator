<?php
require_once '../LZFakeTextGenerator.php';
$FAKE = new LZFakeTextGenerator;

echo "<br /><br />";
echo "Get name: " . $FAKE->get_name();echo "<br />";
echo "Get last name: " . $FAKE->get_lastname();echo "<br />";
echo "Get username: " . $FAKE->get_username();echo "<br />";
echo "Get username no capital letters: " . $FAKE->get_username(false);echo "<br />";
echo "Get username with separator: " . $FAKE->get_username(true, '_');echo "<br />";
echo "Get username with separator and lower case: " . $FAKE->get_username(false, '.');echo "<br /><hr />";
echo "ipv4: " . LZFakeTextGenerator::get_ip();echo "<br />";
echo "ipv6: " . $FAKE->get_ip(true);echo "<br /><hr />";
echo "password: " . $FAKE->get_password();echo "<br />";
echo "password with input static: " . $FAKE->get_password('LZFakeTextGenerator');echo "<br />";
echo "password long with input static: " . $FAKE->get_password('leninzapata@gmail.com',true);echo "<br />";
echo "password long without input: " . $FAKE->get_password(null,true);echo "<br />";
echo "password long with input: " . $FAKE->get_password(time(),true);echo "<br /><hr />";
echo "Get decimal: " . $FAKE->get_decimal();echo "<br />";
echo "Get decimal with minimum: " . $FAKE->get_decimal(1000);echo "<br />";
echo "Get decimal 100 to 1000: " . $FAKE->get_decimal(100,1000);echo "<br />";
echo "Get decimal 100 to 200 with 4 decimals: " . $FAKE->get_decimal(100,200,4);echo "<br /><hr />";
echo "Get Email: " . $FAKE->get_email();echo "<br />";
echo "Get Email con nombre propio: " . $FAKE->get_email('mycustomEmail');echo "<br /><hr />";
echo "Get Credit card random: " . $FAKE->get_credit_card();echo "<br />";
echo "Get Credit card random VISA: " . $FAKE->get_credit_card('visa');echo "<br />";
echo "Get Credit card random MASTERCARD: " . $FAKE->get_credit_card('mastercard');echo "<br /><hr />";