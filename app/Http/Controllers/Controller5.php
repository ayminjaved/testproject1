<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controller5 extends Controller
{
  public  function index(){
    $line1="aimzz444@gmail.com";
    $line2="********";
    
    return view('welcome')->witht1($line1)->witht2($line2);
    return view('contacts')->witht1($line1)->witht2($line2);
    

  } 
  public function list(){
    $line1="Comsats";
    $line2="Wah";
    
    return view('welcome')->witht1($line1)->witht2($line2);
    return view('contact')->witht1($line1)->witht2($line2);
   
  }
  public function list1(){
    $line1="21";
    $line2="A+";
    
    return view('welcome')->witht1($line1)->witht2($line2);
    return view('about')->witht1($line1)->witht2($line2);
    
  }
  public function list2(){
    $line1="Web";
    $line2="Computer Science";
    
    return view('welcome')->witht1($line1)->witht2($line2);
    return view('shipping')->witht1($line1)->witht2($line2);
  
   
  }

 
  
}
