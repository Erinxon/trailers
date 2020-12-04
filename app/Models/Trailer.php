<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    protected $fillable = ['id',"title","year","genero","duracion","Reparto","sinopsis","url","img"];
    use HasFactory;

    public function scopeTitle($query, $title){
        if($title){
            return $query->where('title', 'Like', $title);
        }
    }

}
