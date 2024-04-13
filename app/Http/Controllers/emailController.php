<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\CrudModel;

use App\Mail\SendMail;
class emailController extends Controller
{
    public function index() {
        $records = CrudModel::all();
       
        $mailData = [
            'title' => 'Shruti Malode',
            'body' => 'This mail is for testing purpose',
            'records' => $records
        ];
    
        Mail::to('shreyamalode99@gmail.com')->send(new SendMail($mailData));
    
        // Instead of echoing HTML directly, you should redirect or return a response.
        echo "<h1>Email sent successfully</h1>";    
    }
    
}
