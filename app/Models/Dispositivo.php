<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dispositivo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'ip',
        'id_user'
    ];

   /// public function user(){
   //     return $this->belongsTo(User::class, 'id_user');
   // }

  /*  public function user(){
        return $this->hasMany(User::class, 'id_user', 'id');
    }
    */
}
