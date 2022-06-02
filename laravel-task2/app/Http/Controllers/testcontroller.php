<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testcontroller extends Controller
{
    //show list
    
        public function test($id,$name){
            return "id: ".$id."<br>name: ".$name;
        }
       
   
}
