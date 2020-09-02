@extends('layouts.layout')

@section('main_content')

  <h1>Pagina Student</h1>

  {{-- <h2>Teacher:  {{ $teacher }} - Età: {{ $eta_teacher }}</h2> --}}

  <div>
    @foreach ($students as $student)
      <ul>
        <li>Nome: {{ $student->nome }} </li>
        <li>Cognome: {{ $student->cognome }} </li>
        <li>Voto: {{ $student->voto }} </li>
      </ul>
    @endforeach
  </div>

@endsection
