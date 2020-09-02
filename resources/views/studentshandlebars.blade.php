<h1>Lista di Studenti</h1>

<div id="student-list">




</div>
<script id="student-template" type="text/x-handlebars-template">
  <div>

    <h2>Nome studente: @{{ nome }} @{{ cognome }}</h2>
    <h4>Voto: @{{ voto }}</h4>

  </div>
</script>

<script src="{{ asset('js/app.js') }}">

</script>
{{--
@foreach ($students as $student)

@endforeach --}}
