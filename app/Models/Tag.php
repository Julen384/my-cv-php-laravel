<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $fillable = ['img', 'title'];

    public function exps(){
        return $this->belongsToMany(Exp::class);
    }
}
