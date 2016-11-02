 <?php
 /*
 * PHP SOAP - How to create a SOAP Server and a SOAP Client
 */

$options = array('location' => 'http://localhost/phpsoap/ej1Soap/server.php', 
                  'uri' => 'http://localhost/phpsoap/ej1Soap/');
//create an instante of the SOAPClient (the API will be available)
$api = new SoapClient(NULL, $options);
//call an API method
echo $api->hello();
 ?>