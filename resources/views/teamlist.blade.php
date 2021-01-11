@include('header')
<div class="content">
  <h1>{{ __('Teams list') }}</h1>
  <table style="width:90%">
    <tr>
      <th>{{ __('Team') }}</th>
      <th>{{ __('Leader') }}</th>
      <th>{{ __('See shifts') }}</th>
    </tr>
    @foreach ($teams as $key)
<<<<<<< HEAD
    <li> {{$key->name}}  - {{$key->responsable()->firstname}} - <a href="">Voir</a></li> <!-- Oui y'a pas de lien, je l'ajouterai plus tard -->
=======
      <tr> 
        <td>{{$key->name}}</td>
	<td>{{$key->responsable()->first()->firstname}} {{$key->responsable()->first()->lastname}}</td>
        <td><a href="">Voir</a></td> <!-- Oui y'a pas de lien, je l'ajouterai plus tard -->
>>>>>>> fa1f9d51eba7498cb2d50093e068c2e55b6b86f9
    @endforeach
  </table>
</div>
@include('footer')
