<?php
namespace App\Http\Controllers;

use App\Position;

class TeamController extends Controller
{
  public function teamsList()
  {
    $teams = Position::all();
    return view('teamlist.blade.php', ['teams' => $teams]);
  }
}
 ?>
