<?php
$options = array('uri' => 'http://localhost/phpsoap/',
    'trace' => 1,
    'location' => 'http://localhost/phpsoap/indexsoap.php');

try{
$client = new SoapClient(NULL, $options);

    $response = $client->eightBall();
    echo $response;

} catch (SoapFault $e) {
    echo "ERROR: " . $e->getMessage();
}

