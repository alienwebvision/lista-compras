<?php

namespace App\Http\Controllers\List;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {

        return view('list/lists/index');
    }
}
