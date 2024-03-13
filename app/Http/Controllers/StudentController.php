<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
   public function index() {
    // Récupérer la table students
    $students = Student::all();

    // Envoyer la liste vers la  vue
    return view('students-list', compact('students'));
   }
}
