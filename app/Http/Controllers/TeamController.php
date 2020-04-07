<<?php
namespace App\Http\Controllers;

use App\Position;

class TeamController extends Controller
{
  public teamsList()
  {
    $teams = Position::all();
    view('teamlist.blade.php', ['teams' => $teams]);
  }
}
 ?>
