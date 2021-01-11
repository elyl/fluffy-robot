@include('header');  
  <h1> Liste des équipes</h1>
  <ul>
    @foreach ($teams as $key):
    <li> {{$key->name}} </li>
    @endforeach
  </ul>
@include('footer');
