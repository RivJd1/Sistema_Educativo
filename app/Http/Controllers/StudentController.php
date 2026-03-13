<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $estudiantes = Student::with('faculty:name,id')->get()->map(
            function ($estudiante) {
                $estudiante -> faculty_name = $estudiante->faculty->name ??  'SIN FACULTAD';
                $estudiante -> faculty_id = $estudiante->faculty->id ?? 'SIN ID DE FACULTAD';

                return $estudiante;
            }
        );
        return inertia::render('student/index',[
            'estudiantes' => $estudiantes
        ]);

    }

    public function create()
    {
        //
        return inertia::render('student/create');
    }


}
