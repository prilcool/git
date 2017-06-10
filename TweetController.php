<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tweet;
class TweetController extends Controller
{
	
	public function show(){
        $data = Tweet::first()->tweetBody;
        return ['passedData'=> $data];
    }
   

    public function delete($id){
        return "here we dele the tweet ".$id;
    }

    public function add(){
        return "i add your tweet to database then show you all the tweets";
    }
}