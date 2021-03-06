<?php

require '../vendor/autoload.php';

use wsdldocument\WSDLDocument;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);

// ----- YOUR APPLICATION DEFINITIONS

class Math
{
    /**
     * @param  float
     * @param  float
     * @return float
     */
    public function sum($num0, $num1){}

    /**
     * @ignoreInWsdL
     *
     * @param  float
     * @param  float
     * @return float
     */
    public function mult($num0, $num1){}
}

// ----- USAGE

$wsdl = new WSDLDocument('Math');
header('Content-Type: text/xml');
echo $wsdl->saveXML();
