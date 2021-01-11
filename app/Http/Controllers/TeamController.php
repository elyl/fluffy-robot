<?php
namespace App\Http\Controllers;

use App\Position;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class TeamController extends Controller
{
  protected $redirect = "/newTeam";

  public function teamList()
  {
    $teams = Position::all()->with('responsable');
    return view('teamlist', ['teams' => $teams]);
  }

  public function teamListTest()
  {
    $teams = Position::all()->with('responsable');
    return view('teamlisttest', ['teams' => $teams]);
  }

  public function showNewTeamForm()
  {
      return view('newteamform');
  }

  public function createTeam(Request $request)
  {
    $this->validator($request->all())->validate();

    Position::create(['name' => $request->input('name'),
                     'description' => $request->input('description'),
                     'resp' => 1, // Changer pour l'id obtenu par la session
                     'flag' => $request->input('type'),
                     ]);
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'description' => ['required', 'string', 'max:4096'],
          'type' => ['required'],
      ]);
  }
}
 ?>
