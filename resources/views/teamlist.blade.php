@include('header')
<div class="content">
  <h1>{{ __('Teams list') }}</h1>
  <table>
    <tr>
      <th>{{ __('Team') }}</th>
      <th>{{ __('Leader') }}</th>
      <th>{{ __('See shifts') }}</th>
    </tr>
    @foreach ($teams as $key)
      <tr> 
        <td>{{$key->name}}</td>
	<td>{{$key->responsable()->first()->firstname}} {{$key->responsable()->first()->lastname}}</td>
        <td><a href="">Voir</a></td> <!-- Oui y'a pas de lien, je l'ajouterai plus tard -->
    @endforeach
  </table>
</div>
@include('footer')
