<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use inertia\inertia;

class EnrollmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('enrollment/index');

    }
}
