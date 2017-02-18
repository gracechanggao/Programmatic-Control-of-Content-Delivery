<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//require_once 'ANN\Loader.php';
 
use App\ANN\Network;
use App\ANN\InputValue;
use App\ANN\OutputValue;
use App\ANN\Values;
use App\ANN\Controller\ControllerPrintNetwork;



class QuestionController extends Controller
{
    

      public function index()
    {

          
          
          
          
          
       return view('loaddata');
//          return view('AdminHome')->withPages(Page::all());

    }
    
      public function trainingNetwork()
    {
            
try
{
  $objNetwork = Network::loadFromFile('icecreams.dat');
}
catch(\Exception $e)
{
  print 'Creating a new one...';
 
  $objNetwork = new Network(2, 5, 1);
 
 
  $objTemperature = new InputValue(-15, 50); // Temperature in Celsius
 
  $objTemperature->saveToFile('input_temperature.dat');
 
 
  $objHumidity    = new InputValue(0, 100);  // Humidity percentage
 
  $objHumidity->saveToFile('input_humidity.dat');
 
 
  $objIcecream    = new OutputValue(0, 300); // Quantity of sold ice-creams
 
  $objIcecream->saveToFile('output_quantity.dat');
 
 
  $objValues = new Values;
 
  $objValues->train()
            ->input(
                   $objTemperature->getInputValue(20),
                   $objHumidity->getInputValue(10)
                   )
            ->output(
                   $objIcecream->getOutputValue(20)
                   )
            ->input(
                   $objTemperature->getInputValue(30),
                   $objHumidity->getInputValue(40)
                   )
            ->output(
                   $objIcecream->getOutputValue(90)
                   )
            ->input(
                   $objTemperature->getInputValue(32),
                   $objHumidity->getInputValue(30)
                   )
            ->output(
                   $objIcecream->getOutputValue(70)
                   )
            ->input(
                   $objTemperature->getInputValue(33),
                   $objHumidity->getInputValue(20)
                   )
            ->output(
                   $objIcecream->getOutputValue(75)
                   );
 
  $objValues->saveToFile('values_icecreams.dat');
 
  unset($objValues);
  unset($objTemperature);
  unset($objHumidity);
  unset($objIcecream);
}
 
try
{
  $objTemperature = InputValue::loadFromFile('input_temperature.dat'); // Temperature in Celsius
 
  $objHumidity    = InputValue::loadFromFile('input_humidity.dat'); // Humidity percentage
 
  $objIcecream    = OutputValue::loadFromFile('output_quantity.dat'); // Quantity of sold ice-creams
}
catch(\Exception $e)
{
  die('Error loading value objects');
}
 
try
{
  $objValues = Values::loadFromFile('values_icecreams.dat');
}
catch(\Exception $e)
{
  die('Loading of values failed');
}
 
$objNetwork->setValues($objValues); // to be called as of version 2.0.6
 
$boolTrained = $objNetwork->train();
 
return print ($boolTrained)
        ? 'Network trained'
        : 'Network not trained completely. Please re-run the script';
 
$objNetwork->saveToFile('icecreams.dat');
 
$objNetwork->printNetwork();  
    }
    
    
    
    
      public function useNetwork()
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
}
