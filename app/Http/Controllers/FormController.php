<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('form');
    }
    public function view()
    {
        if(!isset($_POST["evaluari"])){
            $var="";
        }else{
            $var=$_POST["evaluari"];
        }
        return view('form1')->with('var',$var);
    }

}
