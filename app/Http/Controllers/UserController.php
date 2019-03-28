<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // assigning middleware in the controller constructor
    public function __construct() {
        $this->middleware('auth');
     }
}