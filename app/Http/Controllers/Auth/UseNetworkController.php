<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ANN\Network;
use App\ANN\InputValue;
use App\ANN\OutputValue;
use App\ANN\Values;
use App\ANN\Controller\ControllerPrintNetwork;
class UseNetworkController extends Controller
{
    public function index(){
        {
          
        
 

 
try
{
  $objNetwork = Network::loadFromFile('icecreams.dat');
}
catch(Exception $e)
{
  die('Network not found');
}
 
try
{
  $objTemperature = InputValue::loadFromFile('input_temperature.dat'); // Temperature in Celsius
 
  $objHumidity    = InputValue::loadFromFile('input_humidity.dat');    // Humidity percentage
 
  $objIcecream    = OutputValue::loadFromFile('output_quantity.dat');  // Quantity of sold ice-creams
}
catch(Exception $e)
{
  die('Error loading value objects');
}
 
try
{
  $objValues = Values::loadFromFile('values_icecreams.dat');
}
catch(Exception $e)
{
  die('Loading of values failed');
}
 
$objValues->input( // input values appending the loaded ones
                 $objTemperature->getInputValue(17),
                 $objHumidity->getInputValue(12)
                 )
          ->input(
                 $objTemperature->getInputValue(31),
                 $objHumidity->getInputValue(42)
                 )
          ->input(
                 $objTemperature->getInputValue(31),
                 $objHumidity->getInputValue(34)
                 )
          ->input(
                 $objTemperature->getInputValue(34),
                 $objHumidity->getInputValue(21)
                 );
 
$objNetwork->setValues($objValues);
 
$arrOutputs = $objNetwork->getOutputs();
 
foreach($arrOutputs as $arrOutput)
  foreach($arrOutput as $floatOutput)
    print $objIcecream->getRealOutputValue($floatOutput). '<br />';

    }
    
    return view('usingwithq1');
    }
}
