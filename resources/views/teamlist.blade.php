@include('header');
  <h1> Liste des équipes</h1>
  <ul>
    @foreach ($teams as $key)
    <li> {{$key->name}}  - {{$key->responsable()->first()->firstname}} {{$key->responsable()->first()->lastname}} - <a href="">Voir</a></li> <!-- Oui y'a pas de lien, je l'ajouterai plus tard -->
    @endforeach
  </ul>
@include('footer');
