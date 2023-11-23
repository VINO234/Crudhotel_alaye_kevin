<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribut extends Model
{
    use HasFactory;
    protected $fillable = [
      'service_reveil',
      'television',
      'service_nettoyage',
      'petit-dej',
    ];
}
