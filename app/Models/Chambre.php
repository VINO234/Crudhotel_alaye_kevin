<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chambre extends Model
{
    use HasFactory;
    protected $fillable = [
      'nom',
      'description',
      'nomchambre',
      'prix',
      'nombre_lits',
      'max_adultes',
      'max_enfants',
      'disponibiliter'
    ];
}
