<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //index view

    public function index()
    {

        return view('formselect');
    }
}
