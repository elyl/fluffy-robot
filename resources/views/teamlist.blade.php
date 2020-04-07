<html>
<body>
  <h1> List des équipes</h1>
  <ul>
    @foreach ($teams as $key):
    <li> {{$key->name}} </li>
    @endforeach
  </ul>
</body>
</html>
