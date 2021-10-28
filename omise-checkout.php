<?php

$total = $_POST['total']."00";

echo $total;

require_once dirname(__FILE__).'/omise-php/lib/omise.php';
define('OMISE_API_VERSION', '2015-11-17');
// define('OMISE_PUBLIC_KEY', 'PUBLIC_KEY');
// define('OMISE_SECRET_KEY', 'SECRET_KEY');
define('OMISE_PUBLIC_KEY', 'pkey_test_5pj8zasgcvaasrujrrs');
define('OMISE_SECRET_KEY', 'skey_test_5pj8zasgc2vv1yma57q');

$charge = OmiseCharge::create(array(
    'amount' => $total,
    'currency' => 'thb',
    'card' => $_POST["omiseToken"]
));

echo $charge['status'];
echo $charge['amount'];
echo "\n".$charge['card']['financing']." ".$charge['card']['brand']." ".$charge['card']['last_digits'];
echo "\n".$charge['failure_message'];
print('<pre>');
print_r($charge);
print('</pre>');

?>