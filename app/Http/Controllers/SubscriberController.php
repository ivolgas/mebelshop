<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Http\Requests\SubscriberRequest;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{

    function SubscribeIndex(){
        return view('layouts.app');
    }

    function DataInsert(Request $request){
        
        $email = $request->input('email');

        $isInsertSuccess = Subscriber::firstOrCreate(
            ['email' => $email],
            ['email' => $email]);

        return redirect()->back();        
    }
    
}
