<html>
  <body>
    <h1> Liste des shifts de l'équipe 1</h1>
    <ul>
      @foreach ($shifts as $key)
      <li> {{$key->shift_date}} : {{$key->begin_time}} - {{$key->end_time}} </li>
      @endforeach
    </ul>
  </body>
</html>
