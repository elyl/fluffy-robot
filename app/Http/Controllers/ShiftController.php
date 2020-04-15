<?php
namespace App\Http\Controllers;

use App\Position;
use App\Shift;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ShiftController extends Controller
{
  protected $redirect = "/newShift/team/"; // Changer la team pour correspondre à l'url

  public function __construct(Request $request)
  {
    $this->redirect .= $request->route()->parameter('id');
  }

  public function shiftsList($id)
  {
    $shifts = Position::where('position', $id) // Remplacer par le bon id obtenu par l'URL
                      ->get();
    return view('shiftlist', ['shifts' => $shifts]);
  }

  public function showNewTeamForm($id)
  {
      $url = action('shiftController@createShift', array('id' => $id));
      return view('newshift', ['id' => $id, 'url' => $url]);
  }

  public function createShift(Request $request)
  {
    $this->validator($request->all())->validate();

    Shift::create(['position' => $request->input('team_id'),
                   'shift_date' => $request->input('shift_date'),
                   'begin_time' => $request->input('start_time'),
                   'end_time' => $request->input('end_time'),
                   'max_staff' => $request->input('vol_count'),
                   ]);
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
          'shift_date' => ['required', 'date'], // Ajouter une contrainte sur les dates de l'événement
          'start_time' => ['required', 'date'],
          'end_time' => ['required'],
          'vol_count' => ['required', 'integer'],
          'team_id' => ['required', 'integer'],
      ]);
  }
}
 ?>
