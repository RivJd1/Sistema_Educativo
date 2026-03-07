<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class TeacherController extends Controller
{
    public function index()

    {
        /**
         * Display a listing of the resource.
         */
        return Inertia::render('teacher/index');
    }
}
