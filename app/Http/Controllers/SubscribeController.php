<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CrudModel;


class SubscribeController extends Controller
{
    public function getEmail(Request $req){
        $email=$req->input('email');
echo $email;
        return view("subscribe.subscribeletter");
    }
 
    
}
