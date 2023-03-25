<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class СompetitionsController extends Controller {


    function index() {
        return view('competitions');
    }


}
