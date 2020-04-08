<?php
namespace App\Http\Controllers;

use App\Position;

class TeamController extends Controller
{
  public function teamList()
  {
    $teams = Position::all();
    return view('teamlist', ['teams' => $teams]);
  }

  public function showNewTeamForm()
  {
      return view('newteamform');
  }

  public function createTeam($request)
  {

  }
}
 ?>
