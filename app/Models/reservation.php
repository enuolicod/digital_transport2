<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
     
    use HasFactory;
    protected $fillable = ['nom','prenom','date_de_naissance','telephone','sexe','date_de_voyage','origine','destination','payement'];
    
}
