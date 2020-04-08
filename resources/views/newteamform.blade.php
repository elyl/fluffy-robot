<html>
  <body>
      <form method="POST">

      <label for="name">{{__('Team name')}}</label>
      <input type="text" name="name" id="name" /><br/>

      <label for="description">{{__('Team description')}}</label>
      <input type="text" name="description" id="description" /><br/>

      <input type="radio" name="type" id="typeChoice1" />
      <label for="typeChoice1">{{__('Open')}}</label>

      <input type="radio" name="type" id="typeChoice1" />
      <label for="typeChoice2">{{__('Application required')}}</label>

      <input type="radio" name="type" id="typeChoice1" />
      <label for="typeChoice3">{{__('Closed')}}</label>

      <input type="submit" value="{{__('Create team')}}" />
    </form>
  </body>
</html>
