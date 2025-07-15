<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamMarkController extends Controller
{
    public function index()
    {
        return view('exam.index');
    }
}
