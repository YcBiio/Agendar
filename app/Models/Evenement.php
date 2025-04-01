<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evenement extends Model
{
    use HasFactory;
    protected $fillable = ['titre', 'description', 'date_debut', 'date_fin', 'agenda_id'];

    public function agenda(): BelongsTo {
        return $this->belongsTo(Agenda::class);
    }
}
