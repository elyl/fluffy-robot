@include('header');

<h1> Apperçu de l'équipe </h1>
<h2>{{$team->name}} </h2>
<p><strong>Description : </strong>  {{$team->description}} <br/><br/>
Chef équipe : <a href="">{{$team->firstname}} </a> <br/>
Type équipe : NYI </p>

<h3> Shifts </h3>


@include('footer');
