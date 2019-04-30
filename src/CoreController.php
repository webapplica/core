<?php

namespace webapplica\core;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoreController extends Controller
{

    public function index (){
      return view('core::index');
    }
}
