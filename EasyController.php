<?php

namespace App\Http\Controllers;
Use App\Easy;
use Illuminate\Http\Request;

class EasyController extends Controller
{
	
		public function show(){
       // Easy::Leftmenu();
	   //create functions every time 
	      //$auth = new Easy();
       //$auth->Leftmenu();
$p=new Easy();
//$p->sendmassage("meow","25");
//$p->showsendmassage();
$data=$p->pshowsendmassage();
//$p->Leftmenu();
	// return view('home')->with(['data'=>$data]);
	return view('home')->with(compact('data'));
    }
 
}
