<html>
  <body>
      <h1>Nouveau shift</h1>

      @if (count($errors) > 0)
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <form method="POST">
        @csrf
        <label for="shift_date">Date : </label>
        <input type="date" name="shift_date" id="shift_date" /> <br/>

        <label for="start_time">Heure de début : </label>
        <input type="time" name="start_time" id="start_time" /> <br/>

        <label for="end_time">Heure de début : </label>
        <input type="time" name="end_time" id="end_time" /> <br/>

        <label for="vol_count">Nombre de places : </label>
        <input type="number" name="vol_count" id="vol_count" /> <br/>

        <input type="submit" value="Créer" />
      </form>
  </body>
</html>
