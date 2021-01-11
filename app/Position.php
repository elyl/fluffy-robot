<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends model
{
  public $timestamps = false;

  protected $fillable = [
    'name', 'descrption', 'type', 'resp'
  ];

  public function responsable()
  {
    return $this->hasOne(User::class, 'resp');
  }
}
 ?>
