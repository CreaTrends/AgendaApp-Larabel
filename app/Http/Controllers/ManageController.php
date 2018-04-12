<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;

class ManageController extends Controller
{
    //
    public function index(){
    	return view('manage.index');
    }
    public function dashboard(){
    
    	return view('manage.dashboard');
    }
}
