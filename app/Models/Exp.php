<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exp extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'category', 'img'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }
}
