@include('header');

<h1> Apperçu de l'équipe </h1>
<h2><strong>Description</strong> {{$team->name}} </h2>
<p> {{$team->description}} <br/><br/>
Chef équipe : <a href="">{{$team->responsable->firstname}} </a> <br/>
Type équipe : NYI </p>

<h3> Shifts </h3>


@include('footer');
