@include('header');
      <h1>Nouveau shift</h1>

      <p>Test : {{ $nb }} </p>

      <p> Equipe : {{ $id }} </p>

      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form method="POST" action="newShift">
        @csrf
        <label for="shift_date">Date : </label>
        <input type="date" name="shift_date" id="shift_date" /> <br/>

        <label for="start_time">Heure de début : </label>
        <input type="time" name="start_time" id="start_time" /> <br/>

        <label for="end_time">Heure de fin : </label>
        <input type="time" name="end_time" id="end_time" /> <br/>

        <label for="vol_count">Nombre de places : </label>
        <input type="number" name="vol_count" id="vol_count" /> <br/>

        <input type="hidden" name="team_id" value="{{ $id }}" />

        <input type="submit" value="Créer" />
      </form>
@include('footer');
