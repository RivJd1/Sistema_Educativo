<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TeacherController extends Controller
{
    public function index()

    {
        $maestros = Teacher::all();
        return Inertia::render('teacher/index', [
            'maestros' => $maestros
        ]);
    }

    public function create(){
        return Inertia::render('teacher/create');
    }
}
