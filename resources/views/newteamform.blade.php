@include('header');

      <h1>{{__('Team Creation')}}</h1>

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

      <label for="name">{{__('Team name')}}</label>
      <input type="text" name="name" id="name" /><br/>

      <label for="description">{{__('Team description')}}</label>
      <textarea name="description" id="description" /></textarea><br/>

      <input type="radio" name="type" id="typeChoice1" value="1" />
      <label for="typeChoice1">{{__('Open')}}</label>

      <input type="radio" name="type" id="typeChoice1" value="2" />
      <label for="typeChoice2">{{__('Application required')}}</label>

      <input type="radio" name="type" id="typeChoice1" value="3" />
      <label for="typeChoice3">{{__('Closed')}}</label>

      <br/><br/>

      <input type="submit" value="{{__('Create team')}}" />
    </form>

@include('footer');
