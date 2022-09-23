<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courrier extends Model
{
    use HasFactory;
    protected $fillable = ['envoyeur','recepteur','telephone','origine','destination','status','date_de_reception','nom_du_chauffeur','payement'];

}
