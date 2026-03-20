<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;
use inertia\inertia;
use App\Models\Student;
use App\Models\Course;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::with(['student:student_code,name', 'course:id,name'])->get()->map(
            function ($enrollment) {
                $enrollment -> student_name = $estudiante->student->name ??  'DESCONOCIDO';
                $enrollment -> student_id = $estudiante->student->id ?? 'SIN ID';
                $enrollment -> course_name = $estudiante->course->name ??  'NO TIENE CURSO';
                $enrollment -> course_id = $estudiante->course->id ?? 'NO TIENE ID';

                return $enrollment;
            }
        );
        return inertia::render('enrollment/index',[
            'enrollments' => $enrollments
        ]);

    }
}
