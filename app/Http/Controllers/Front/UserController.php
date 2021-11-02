<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware(middleware:'auth')->except('getUsername');
    }

    public function getUsername() {
        return "Moustafa Alsayeh";
    }
    
    public function display() {
        return 'Display function @ UserController';
    }
}
