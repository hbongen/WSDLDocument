<?php

require '../vendor/autoload.php';

use wsdldocument\WSDLDocument;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

// ----- YOUR APPLICATION DEFINITIONS

class Complex
{
    /**
     * @var integer[]
     */
    public $att;
}

class Service
{
    /**
     * @return Complex
     */
    public function operation(){}
}

// ----- USAGE

$wsdl = new WSDLDocument('Service');
$wsdl2 = new WSDLDocument('Service');
header('Content-Type: text/xml');
echo $wsdl2->saveXML();
