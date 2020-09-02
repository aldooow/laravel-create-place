<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index(){
      // $students = [
      //   [
      //     'nome' => 'Aldo',
      //     'cognome' => 'Cahuana',
      //     'voto' => 10,
      //   ],
      //   [
      //     'nome' => 'Carlo',
      //     'cognome' => 'Marsala',
      //     'voto' => 8,
      //   ],
      //   [
      //     'nome' => 'Rosy',
      //     'cognome' => 'Ferrarese',
      //     'voto' => 5,
      //   ]
      // ];

      $students = Student::all();

      return view('students', compact('students'));



      // return view('students', [
      //   // 'teacher' => 'Lama',
      //   // 'eta_teacher' => 29,
      //   'students' => $students,
      // ]);
    }
    public function handlebars(){
      return view('studentshandlebars', []);
    }
}
