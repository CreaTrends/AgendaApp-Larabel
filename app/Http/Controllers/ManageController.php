<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use Session;

class ManageController extends Controller
{
    //
    
    public function index(){
        Session::flash('status','buena weon oh');
		return view('dashboard.index');
    }
    public function dashboard(){
    
    	return view('manage.dashboard');
    }
    public function parentdashboard(){
    
    	return "hola eres un apoderado controlador";
    }
}
