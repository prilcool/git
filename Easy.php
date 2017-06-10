<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Easy extends Model
{

 //public function ScopeLeftmenu() {  use scope to access from anywhere
 public function Leftmenu() {

   echo $this->word="this is a good example";
  }
  
	public $x;
	public $y;
	function sendmassage($x,$y) {
		
		$this->name=$x;
		$this->age=$y;
		
		
	}
	
	
	function showsendmassage() {
		
		echo $this->name;
	
		
		
	}
		function pshowsendmassage() {
		
	
		//return $this->age;  // here we return to a view 
   //$data = Tweet::first()->tweetBody;
      $data = Tweet::All();
        return  $data;
		
	}

}
