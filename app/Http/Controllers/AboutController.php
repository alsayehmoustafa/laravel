<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        $payload = ['userId' => "1", 'firstname' => 'Moustafa', 'lastname' => 'Alsayeh'];
        $payloadObj = new \stdClass();
        $payloadObj->userId = '1';
        $payloadObj->firstname = 'Moustafa';
        $payloadObj->lastname = 'Alsayeh';
        $payloadObj->fruits = ['Apple', 'Orange', 'Bannana', 'Pinapple'];
        return view('about')->with(compact('payloadObj'));
    }
}
