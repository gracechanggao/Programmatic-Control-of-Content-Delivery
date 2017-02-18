<?php

namespace App\Http\Controllers;
require_once 'App/ANN/Loader.php';
use Illuminate\Http\Request;
use App\ANN\Network;
use App\ANN\InputValue;
use App\ANN\OutputValue;
use App\ANN\Values;
use App\ANN\Controller\ControllerPrintNetwork;

 
use App\ANN\Classification;
use App\ANN\StringValue;
//require_once 'App/ANN/Loader.php';


class TrainNetworkController extends Controller
{
    
      public function index()
    {
            
//try
//{
//  $objNetwork = Network::loadFromFile('strings.dat');
//}
//catch(Exception $e)

          
          
          
          
           
//try
//{
//  $objNetwork = Network::loadFromFile('dats/xor.dat');
//}
//catch(Exception $e)
{
  print 'Creating a new one...';
 
  $objNetwork = new Network;
 
  $objValues = new Values;
 
  $objValues->train()
            ->input(0,0)->output(0)
            ->input(0,1)->output(1)
            ->input(1,0)->output(1)
            ->input(1,1)->output(0);
 
  $objValues->saveToFile('dats/values_xor.dat');
 
  unset($objValues);
}
 
try
{
  $objValues = Values::loadFromFile('dats/values_xor.dat');
}
catch(Exception $e)
{
  die('Loading of values failed');
}
 
$objNetwork->setValues($objValues); // to be called as of version 2.0.6
 
$boolTrained = $objNetwork->train();
 
print ($boolTrained)
        ? 'Network trained'
        : 'Network not trained completely. Please re-run the script';
 
$objNetwork->saveToFile('dats/xor.dat');
 
$objNetwork->printNetwork();
          
          
  
    
//  print 'Creating a new one...';
//  
//  
//  
// 
//  $objClassification = new Classification(); // As of ANN 2.1.2
// 
//  
//  for ($x = 0; $x <= filesize('comprehension_score.dat'); $x++) {
////      $x=str_replace(array("\r\n","\r","\n"),"",$x);
//
//    echo ("$x<br>");
//      $objClassification->addClassifier($x);
//
//} 
//  
//
// 
//  
//  
//  
////  $objClassification->saveToFile('classifiers_strings.dat');
// 
//  $objNetwork = new Network(1, 8, 2);
// 
//  $objStringValues = new StringValue(filesize('comprehension_score.dat')); // As of ANN 2.1.1
// 
//  
//$objA = readfile('ave_duration.dat'); 
//print $objA[1];
//
//$objB    = readfile('ave_fs_len.dat'); 
// 
//$objC    = readfile('max_duration.dat'); 
//
//$objD    = readfile('num_fixations.dat'); 
//
//$objE    = readfile('num_regressions.dat'); 
//
//$objF    = readfile('read_ratio.dat'); 
//
//$objG    = readfile('regression_ratio.dat'); 
//
//$objH    = readfile('scan_ratio.dat'); 
//
//$objI    = readfile('skim_ratio.dat'); 
//  
// $objJ    = readfile('total_duration.dat'); 
////    
////$objA ->saveToFile('ave_duration.dat'); 
////
////$objB    ->saveToFile('ave_fs_len.dat'); 
//// 
////$objC   ->saveToFile('max_duration.dat'); 
////
////$objD   ->saveToFile('num_fixations.dat'); 
////
////$objE   ->saveToFile('num_regressions.dat'); 
////
////$objF   ->saveToFile('read_ratio.dat'); 
////
////$objG  ->saveToFile('regression_ratio.dat'); 
////
////$objH  ->saveToFile('scan_ratio.dat'); 
////
////$objI   ->saveToFile('skim_ratio.dat'); 
//  
//  
//  $objStringValues->saveToFile('input_strings.dat');
// 
//  $objValues = new Values;
//  
//     for ($n = 0; $n <= filesize('total_duration.dat'); $n++) {
////  $objValues->train()
////          
////      
////
////
////    ->input($objStringValues->getInputValue())
////    ->output($objClassification->getOutputValue('german'))
////    ->input($objStringValues->getInputValue('Hello World'))
////    ->output($objClassification('english')); // As of PHP 5.3.0
////        
//
//  $objValues->train()
//            ->input(
//                   $objA[$n],
//                    $objB[$n],
//                    $objC[$n],
//                    $objD[$n],
//                    $objE[$n],
//                    $objF[$n],
//                    $objG[$n],
//                    $objH[$n],
//                    $objJ[$n],
//                    
//                   $objI[$n]
//                   )
//          
//            ->output(
//                   $objClassification[$n]
//                   );
// 
////            ->input(
////                   $objA->getInputValue(20),
////                    $objB->getInputValue(20),
////                    $objC->getInputValue(20),
////                    $objD->getInputValue(20),
////                    $objE->getInputValue(20),
////                    $objF->getInputValue(20),
////                    $objG->getInputValue(20),
////                    $objH->getInputValue(20),
////                    
////                   $objI->getInputValue(10)
////                   )
////          
////            ->output(
////                   $objClassification->getOutputValue(75)
////                   );
//// 
//
//
//  }
//  $objValues->saveToFile('values_strings.dat');
// 
//  unset($objValues);
////}
// 
//
//
//
//
// 
//try
//{
//  
//$objA = InputValue::loadFromFile('ave_duration.dat'); // Temperature in Celsius
//
//
//
//
//
//$objB    = InputValue::loadFromFile('ave_fs_len.dat'); // Humidity percentage
// 
//$objC    = InputValue::loadFromFile('max_duration.dat'); // Quantity of sold ice-creams
//
//$objD    = InputValue::loadFromFile('num_fixations.dat'); // Quantity of sold ice-creams
//
//$objE    = InputValue::loadFromFile('num_regressions.dat'); // Quantity of sold ice-creams
//
//$objF    = InputValue::loadFromFile('read_ratio.dat'); // Quantity of sold ice-creams
//
//$objG    = InputValue::loadFromFile('regression_ratio.dat'); // Quantity of sold ice-creams
//
//$objH    = InputValue::loadFromFile('scan_ratio.dat'); // Quantity of sold ice-creams
//
//$objI    = InputValue::loadFromFile('skim_ratio.dat'); // Quantity of sold ice-creams
// $objJ    = InputValue::loadFromFile('total_duration.dat'); // Quantity of sold ice-creams
//$objClassification    = OutputValue::loadFromFile('comprehension_score.dat'); // Quantity of sold ice-creams
//
//
//}
//catch(\Exception $e)
//{
//  die('Error loading value objects');
//}
// 
//
//
//try
//{
//  $objValues = Values::loadFromFile('values_strings.dat');
//}
//catch(Exception $e)
//{
//  die('Loading of values failed');
//}
// 
//$objNetwork->setValues($objValues);
// 
//$objNetwork->train();
// 
//$objNetwork->saveToFile('strings.dat');
//
//
// $boolTrained = $objNetwork->train();
//return print ($boolTrained)
//        ? 'Network trained'
//        : 'Network not trained completely. Please re-run the script';
//
//$objNetwork->printNetwork();
//   return view('trainpage');
}

function read_file() { 

if (file_exists($this->file)) { 

$line =file($this->file); 

} 

return $line; 

} 
    
  
}
