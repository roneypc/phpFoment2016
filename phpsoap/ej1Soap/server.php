<?php
/*
 * PHP SOAP - How to create a SOAP Server and a SOAP Client
 */

//a basic API class
class MyAPI {
    function hello() {
        return "Hola desde el servidor SOAP de roberto ;)";
    }
    function bye(){
    	return 23;
    }


}
//when in non-wsdl mode the uri option must be specified
$options=array('uri'=>'http://localhost/phpsoap/ej1Soap');
//create a new SOAP server
$server = new SoapServer(NULL,$options);
//attach the API class to the SOAP Server
$server->setClass('MyAPI');
//start the SOAP requests handler
$server->handle();
?>
