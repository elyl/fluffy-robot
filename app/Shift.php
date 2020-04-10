<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Shift extends model
{
  public $timestamps = false;

  public $fillable = [
    'position, shift_date, begin_time, end_time, max_staff'
  ];
}
 ?>
