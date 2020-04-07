<?php
namespace App\Http\Controllers;

use App\Position;

class TeamController extends Controller
{
  public function teamList()
  {
    $teams = Position::all();
    return view('teamlist.blade.php', ['teams' => $teams]);
  }
}
 ?>
